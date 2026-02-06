<?php
namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use App\Models\Customer;
use App\Exports\CustomerExport;
use App\Notifications\Admin;
use App\Models\Application;
use App\Notifications\Welcome;
use App\Notifications\CustomerApproved;
use App\Notifications\CustomerRegisteredNotification;
use App\Http\Controllers\Controller;
use App\Mail\Vendor\VendorRegistered;
use App\Http\Controllers\API\CartApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;


class CustomerController extends Controller
{
    public const REDIRECT_URL = 'admin/customers';

    public function __construct(){

    }

    public function index(Request $request){

        /*$customer = Customer::first();
        $delay = now()->addSeconds(10);
        $customer->notify((new Welcome())->delay($delay));
        */
        $collection = User::select('users.*');        
        if(isset($request->from_date) && $request->from_date !='' && isset($request->to_date) && $request->to_date !=''){
            $collection->whereBetween('created_at', [$request->from_date." 00:00:00", $request->to_date." 23:59:59"]);
        }else if(isset($request->from_date) && $request->from_date !=''){
            $collection->whereDate('created_at',$request->from_date);
        }else if(isset($request->to_date) && $request->to_date !=''){
            $collection->whereDate('created_at',$request->to_date);
        }

        if(request()->status !=''){
            $collection->where('status',request()->status);
        }

        $collection->whereHas('roles', function($q){ 
            $q->where('roles.name','driver');
        });

        if($request->has('export')){            
            $customers = $collection->orderBy('id','DESC')->get();
            //dd($customers);
            return Excel::download(new CustomerExport($customers), 'customers_.'.time().'.csv');
        }

        $customers = $collection->orderBy('id','desc')->get();
        //dd($customers);
        return view('admin.customer.index', compact('customers'));
    }

    public function sendMailToCustomer(Request $request){
        if($request->ajax()){
            $customer = User::find($request->id);
            $customer->notify((new CustomerRegisteredNotification())->delay(now()->addSeconds(0)));
            return response()->json([
                'success'       => true,
                'message'       => 'Mail sent.',
            ]);
        }
    }

    public function sendMailToAdmin(Request $request){
        if($request->ajax()){
            $customer = User::find($request->id);
            $admins = User::whereHas('roles', function($q){ 
                $q->where('roles.name','admin');
            })->get();
            
            foreach($admins as $admin){
                $admin->notify((new Admin($customer))->delay(now()->addSeconds(0)));
            }

            return response()->json([
                'success'       => true,
                'message'       => 'Mail sent.',
            ]);
        }
    }

    public function edit(Request $request, $id){
        
        $user = User::find($id);        

        if ($request->isMethod('post') && $request->ajax()) {
            $messages = [
                'first_name'=>'First Name is Required ',
                'application'=>'Application can not be Empty',
                'others_application'=>'Other application can not be Empty',
                'agree_tnc'=>'Please Select',
                'agree_for_whatsapp'=>'Please Select', 
            ];
              $validator = Validator::make($request->all(), [
                'first_name'=>'required',
                'application'=>'required',
                'others_application'=>'required',
                'agree_tnc'=>'required',
                'agree_for_whatsapp'=>'required',
              ],$messages);
              if ($validator->fails()) {
                  return response()->json(['error'=>$validator->errors()], 401);
              }
              $user->first_name = $request->first_name;
              $user->phone = $request->phone;
              $user->application = $request->application;
              $user->others_application = $request->others_application;
              $user->agree_tnc = $request->agree_tnc;
              $user->agree_for_whatsapp = $request->agree_for_whatsapp;
              $user->save();
              return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'User has been updated.',
                'reload' => true

                ]);
        }        

        $application = Application::pluck('title','id');
        //dd($application);
        $application->prepend('All','');

        return view('admin.customer.edit',compact('user','application'));
        
    }

    public function customerStatusChange(Request $request){
        if ($request->ajax()) {
            $user = User::find($request->customer_id);
             
            if($user->status=='Active'){
                $user->status = 'Inactive';
            }else{
                $user->status = 'Active';
            }
            $user->save();
            return response()->json([
                'success'   => true,
                'message'   => 'Customer status has been '.strtolower($user->status),
                'redirect_url' => url('admin/customers')
            ]);
        }
    }

    public function delete(Request $request ,$id){
        // dd('Ok');
        if (User::find($id)) {
            $user = User::find($id);
            $user->delete();
            return redirect('admin/customers')->with('success', 'User deleted successfully');
        }
       
        
    }


}