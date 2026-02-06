<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class ServiceController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
         
          $service = Service::first();
          return view('admin.service.index',compact('service'));

    }
    

    public function store(Request $request,$id=''){

         if(!empty($request->submit)){
            $request->validate([
                 
                 'banner_heading' => 'required',
                 'offer_desc' => 'required',
                 'care_desc' => 'required',
             ]);

            $servCOunt = Service::get();
           
             if(count($servCOunt) > 0){
               
               $service = Service::first(); 
               $service->banner_heading = $request->banner_heading;
               $service->offer_desc = $request->offer_desc;
               $service->care_desc = $request->care_desc;
               if($request->hasFile('banner_image')){
                    $banner_image = $request->file('banner_image');
                    $file_name = 'icon_'.time().'.'.$banner_image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/service/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $banner_image->move( $destinationPath, $file_name );
                    $service->banner_image = 'frontend/assets/images/service/'.$file_name;
                }
              
               $service->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Service Page Content updated successfully..',
                'redirect_url' => url('admin/service')

               ]);

             }else{
                
               $service = new Service;
               $service->banner_heading = $request->banner_heading;
               $service->offer_desc = $request->offer_desc;
               $service->care_desc = $request->care_desc;
               if($request->hasFile('banner_image')){
                    $banner_image = $request->file('banner_image');
                    $file_name = 'icon_'.time().'.'.$banner_image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/service/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $banner_image->move( $destinationPath, $file_name );
                    $service->banner_image = 'frontend/assets/images/service/'.$file_name;
                }
               $service->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Service Page Content add successfully.',
                'redirect_url' => url('admin/service')

               ]);
              
             }
             
            
         }else{

            if(!empty($id)){
              $service = Service::findOrFail($id);
              return view('admin.service',compact('service'));
            }else{
              return view('admin.service');
            }

         }
     }

   


   
}
