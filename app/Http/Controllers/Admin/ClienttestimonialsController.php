<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Clienttestimonial;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class ClienttestimonialsController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){

          $clientfeedback = Clienttestimonial::latest()->paginate();
          return view('admin.clienttestimonials.index',compact('clientfeedback'));
    }
    

    public function add(Request $request,$id=''){
      


         if($request->ajax()){
            
             if(!empty($request->id)){
                 
               $clienttestimonials = Clienttestimonial::find($request->id); 
               $clienttestimonials->feedback = $request->feedback;
               $clienttestimonials->name = $request->name;
               $clienttestimonials->designation = $request->designation;
               $clienttestimonials->is_active = $request->is_active;

                if($request->hasFile('image')){
                    $icon = $request->file('image');
                    $file_name = 'image_'.time().'.'.$icon->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/feedback/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $icon->move( $destinationPath, $file_name );
                    $clienttestimonials->image = 'frontend/assets/images/feedback/'.$file_name;
                }
                $clienttestimonials->save();
                return response()->json([
                  'success' => true,
                  'data'   => [],
                  'message'   =>'feedback updated successfully..',
                  'reload' => true
                ]);
               

             }else{

              

               $clienttestimonials = new Clienttestimonial;
               $clienttestimonials->feedback = $request->feedback;
               $clienttestimonials->name = $request->name;
               $clienttestimonials->designation = $request->designation;
               $clienttestimonials->is_active = $request->is_active;
               $clienttestimonials->image = $request->image;
                if($request->hasFile('image')){
                    $icon = $request->file('image');
                    $file_name = 'image_'.time().'.'.$icon->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/feedback/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $icon->move( $destinationPath, $file_name );
                    $clienttestimonials->image = 'frontend/assets/images/feedback/'.$file_name;
                }
               $clienttestimonials->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'feedback add successfully.',
                'reload' => true

               ]);
             }  
         }
     }

      public function edit($id=''){
       
        $clienttestimonials = Clienttestimonial::findOrFail($id);
        return response()->json([
          'data' => $clienttestimonials
        ]);
       
      }

     public function delete(Request $request, $id){
        
        if (Clienttestimonial::find($id)) {
            $clienttestimonials = Clienttestimonial::find($id);
            $clienttestimonials->delete();
            return redirect()->back()->with('success', 'feedback deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    } 
   


   
}
