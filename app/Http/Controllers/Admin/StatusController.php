<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Status;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class StatusController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
         
          $status = Status::latest()->paginate(20);
          return view('admin.status.index',compact('status'))->with('i', (request()->input('page', 1) - 1) * 20);

    }
    

    public function add(Request $request,$id=''){

         if(!empty($request->submit)){
            $request->validate([
                 'name' => 'required',
             ]);

            
             if(!empty($request->id)){
               
               $status = Status::find($request->id); 
               $status->name = $request->name;
               $status->is_active = $request->is_active;
               $status->save();
               $status->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Status updated successfully..',
                'reload' => true

               ]);
               return redirect()->route('admin.status.store');

             }else{
                
               $status = new Status;
               $status->name = $request->name;
               $status->is_active = $request->is_active;
               $status->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Status add successfully.',
                'reload' => true

               ]);
              
               return redirect()->route('admin.status.store');
             }
             
            
         }else{

            if(!empty($id)){
              $statuslist = Status::findOrFail($id);
              return view('admin.status.store',compact('statuslist'));
            }else{
              return view('admin.status.store');
            }

         }
     }

     public function delete(Request $request, $id){
        
        if (Status::find($id)) {
            $slider = Status::find($id);
            $slider->delete();
            return redirect()->back()->with('success', 'Slider deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    } 
   


   
}
