<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Mail\Vendor\VendorRegistered;
use App\Http\Controllers\API\CartApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ChassisImport;
use App\Models\Chassis;

class ChassisController extends Controller
{
    public const REDIRECT_URL = 'admin/chassis_listing';

    public function __construct(){

    }

    public function index(Request $request){
        $page_size = 25;
        $current_page = isset($request->item)?$request->item:$page_size;
        if(isset($request->page)){
            $sr_no_start = ($request->page * $current_page)-$current_page + 1;
        }else{
            $sr_no_start = 1;
        }
        $collection = Chassis::select('chassises.*');

        if($request->from_date !='' && $request->to_date !=''){
            $from_date  = date('Y-m-d',strtotime($request->from_date));
            $to_date    = date('Y-m-d',strtotime($request->to_date));
            $collection->whereBetween('created_at',[$from_date, $to_date]);
        }
        if($request->keyword !=''){
            $keyword = request()->keyword;
            $collection->where('chassis_no','like', "%$keyword%");
        }
        $chassises = $collection->orderBy('created_at', 'desc')->paginate($current_page);
        $chassises->appends($request->all());
        //dd($chassises);
        return view('admin.chassis.index', compact('chassises'));
    }
    /**
     * Method imports.
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function importSheet(Request $request){
        if($request->hasFile('csvfile') && $request->ajax()){
            Excel::import(new ChassisImport, request()->file('csvfile') );
            //return redirect('admin/chassis_listing')->with('success', 'All good!');
            
            return response()->json([
                'success'   => true,
                'message'   => 'Chassis no. excel sheet import successfully.',
                'reload'    => true
            ]);            
        }
    }
    public function delete(Request $request ,$id){
        // dd('Ok');
        if (Chassis::find($id)) {
            $user = Chassis::find($id);
            $user->delete();
            return redirect('admin/chassis_listing')->with('success', 'Record deleted successfully');
        }
    }
}