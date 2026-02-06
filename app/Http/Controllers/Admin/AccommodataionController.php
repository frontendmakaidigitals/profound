<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Accommodataion;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class AccommodataionController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
         
          $accommodataion = Accommodataion::latest()->paginate(20);
          return view('admin.accommodataion.index',compact('accommodataion'))->with('i', (request()->input('page', 1) - 1) * 20);

    }
    

    public function add(Request $request,$id=''){

         if(!empty($request->submit)){
            $request->validate([
                 'name' => 'required',
             ]);

            
             if(!empty($request->id)){
               
               $accommodataion = Accommodataion::find($request->id); 
               $accommodataion->name = $request->name;
               $accommodataion->order = $request->order;
               $accommodataion->is_active = $request->is_active;
               $accommodataion->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Accommodataion updated successfully..',
                'redirect_url' => url('admin/accommodataion')

               ]);
               return redirect()->route('admin.accommodataion.store');

             }else{
                
               $accommodataion = new Accommodataion;
               $accommodataion->name = $request->name;
               $accommodataion->order = $request->order;
               $accommodataion->is_active = $request->is_active;
               $accommodataion->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Accommodataion add successfully.',
                'redirect_url' => url('admin/accommodataion')

               ]);
              
               return redirect()->route('admin.accommodataion.store');
             }
             
            
         }else{

            if(!empty($id)){
              $accommodataionlist = Accommodataion::findOrFail($id);
              return view('admin.accommodataion.store',compact('accommodataionlist'));
            }else{
              return view('admin.accommodataion.store');
            }

         }
     }

     public function delete(Request $request, $id){
        
        if (Accommodataion::find($id)) {
            $slider = Accommodataion::find($id);
            $slider->delete();
            return redirect()->back()->with('success', 'Slider deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    } 
   


   
}
