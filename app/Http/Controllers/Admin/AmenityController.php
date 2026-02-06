<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Amenity;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class AmenityController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
         
          $amenities = Amenity::latest()->paginate(20);
          return view('admin.amenities.index',compact('amenities'));

    }
    

    public function add(Request $request,$id=''){

         if(!empty($request->submit)){
            $request->validate([
                 'name' => 'required',
             ]);

            
             if(!empty($request->id)){
               
               $amenitiess = Amenity::find($request->id); 
               $amenitiess->name = $request->name;
               $amenitiess->is_active = $request->is_active;

                if($request->hasFile('icon')){
                    $icon = $request->file('icon');
                    $file_name = 'icon_'.time().'.'.$icon->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/icon/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $icon->move( $destinationPath, $file_name );
                    $amenitiess->icon = 'frontend/assets/images/icon/'.$file_name;
                }
                $amenitiess->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Amenities updated successfully..',
                'reload' => true

               ]);
               return redirect()->route('admin.neighbourhoods.store');

             }else{
                 


               $amenitiess = new Amenity;
               $amenitiess->name = $request->name;
               $amenitiess->is_active = $request->is_active;
               $amenitiess->icon = $request->icon;
                if($request->hasFile('icon')){
                    $icon = $request->file('icon');
                    $file_name = 'icon_'.time().'.'.$icon->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/icon/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $icon->move( $destinationPath, $file_name );
                    $amenitiess->icon = 'frontend/assets/images/icon/'.$file_name;
                }
               $amenitiess->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Amenities add successfully.',
                'reload' => true

               ]);
              
               return redirect()->route('admin.neighbourhoods.store');
             }  
         }
     }

      public function edit($id=''){
       
        $amenitiess = Amenity::findOrFail($id);
        return response()->json([
          'data' => $amenitiess
        ]);
       
      }

     public function delete(Request $request, $id){
        
        if (Amenity::find($id)) {
            $amenitiess = Amenity::find($id);
            $amenitiess->delete();
            return redirect()->back()->with('success', 'Amenities deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    } 
   


   
}
