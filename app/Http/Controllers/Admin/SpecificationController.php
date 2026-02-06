<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Specification;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class SpecificationController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
         
          $specifications = Specification::latest()->get();
          return view('admin.specification.index',compact('specifications'));

    }
    

    public function add(Request $request,$id=''){

         if(!empty($request->submit)){
            $request->validate([
                 'heading_one' => 'required',
                 'heading_two' => 'required',
             ]);

            
             if(!empty($request->id)){
               
               $amenitiess = Specification::find($request->id); 
               $amenitiess->heading_one = $request->heading_one;
               $amenitiess->heading_two = $request->heading_two;
               $amenitiess->is_active = $request->is_active;

                if($request->hasFile('s_icon')){
                    $s_icon = $request->file('s_icon');
                    $file_name = 'icon_'.time().'.'.$s_icon->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/icon/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $s_icon->move( $destinationPath, $file_name );
                    $amenitiess->s_icon = 'frontend/assets/images/icon/'.$file_name;
                }
                $amenitiess->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Specification updated successfully..',
                'redirect_url' => url('admin/specification')

               ]);
               return redirect()->route('admin.specification.store');

             }else{
                 


               $specification = new Specification;
               $specification->heading_one = $request->heading_one;
               $specification->heading_two = $request->heading_two;
               $specification->is_active = $request->is_active;
             
                if($request->hasFile('s_icon')){
                    $s_icon = $request->file('s_icon');
                    $file_name = 'icon_'.time().'.'.$s_icon->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/icon/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $s_icon->move( $destinationPath, $file_name );
                    $specification->s_icon = 'frontend/assets/images/icon/'.$file_name;
                }
               $specification->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Specification add successfully.',
                'redirect_url' => url('admin/specification')

               ]);
              
               return redirect()->route('admin.specification.store');
             }  
         }
     }

      public function edit($id=''){
       
        $amenitiess = Specification::findOrFail($id);
        return response()->json([
          'data' => $amenitiess
        ]);
       
      }

     public function delete(Request $request, $id){
        
        if (Specification::find($id)) {
            $amenitiess = Specification::find($id);
            $amenitiess->delete();
            return redirect()->back()->with('success', 'Amenities deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    } 
   


   
}
