<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Neighbourhoods;
use App\Models\Status;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class NeighbourhoodsController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
         
          $neighbourhoods = Neighbourhoods::latest()->get();;
          return view('admin.neighbourhoods.index',compact('neighbourhoods'))->with('i', (request()->input('page', 1) - 1) * 20);

    }
    

    public function add(Request $request,$id=''){

         if(!empty($request->submit)){
            $request->validate([
                 'name' => 'required',
             ]);

            
             if(!empty($request->id)){
               
               $neighbourhoods = Neighbourhoods::find($request->id); 
               $neighbourhoods->name = $request->name;
               $neighbourhoods->is_active = $request->is_active;
               $neighbourhoods->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Neighbourhoods updated successfully..',
                'reload' => true

               ]);
               return redirect()->route('admin.neighbourhoods.store');

             }else{
                
               $neighbourhoods = new Neighbourhoods;
               $neighbourhoods->name = $request->name;
               $neighbourhoods->is_active = $request->is_active;
               $neighbourhoods->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Neighbourhoods add successfully.',
                'reload' => true

               ]);
              
               return redirect()->route('admin.neighbourhoods.store');
             }
             
            
         }else{

            if(!empty($id)){
              $neighbourhoodslist = Neighbourhoods::findOrFail($id);
              return view('admin.neighbourhoods.store',compact('neighbourhoodslist'));
            }else{
              return view('admin.neighbourhoods.store');
            }

         }
     }

     public function delete(Request $request, $id){
        
        if (Neighbourhoods::find($id)) {
            $slider = Neighbourhoods::find($id);
            $slider->delete();
            return redirect()->back()->with('success', 'Slider deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    } 
   


   
}
