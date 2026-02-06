<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class AboutController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
         
          $about = About::first();
          return view('admin.about.index',compact('about'));

    }
    

    public function store(Request $request,$id=''){

         if(!empty($request->submit)){
            $request->validate([
                 'banner_image' => 'required',
                 'banner_heading' => 'required',
                 'mission_desc' => 'required',
                 'ceo_image' => 'required',
                 'ceoMsg' => 'required',
                 'ceoName' => 'required',
                 'ceoDesignation' => 'required',
                 'teamDesc' => 'required',
             ]);

            $aboutCOunt = About::get();
          
             if(count($aboutCOunt) > 0){
               
               $about = About::first(); 
               $about->banner_heading = $request->banner_heading;
               $about->mission_desc = $request->mission_desc;
               $about->ceoMsg = $request->ceoMsg;
               $about->ceoName = $request->ceoName;
               $about->ceoDesignation = $request->ceoDesignation;
               $about->teamDesc = $request->teamDesc;
               if($request->hasFile('banner_image')){
                    $banner_image = $request->file('banner_image');
                    $file_name = 'icon_'.time().'.'.$banner_image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/about/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $banner_image->move( $destinationPath, $file_name );
                    $about->banner_image = 'frontend/assets/images/about/'.$file_name;
                }
               if($request->hasFile('ceo_image')){
                    $ceo_image = $request->file('ceo_image');
                    $file_name = 'icon_'.time().'.'.$ceo_image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/about/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $ceo_image->move( $destinationPath, $file_name );
                    $about->ceo_image = 'frontend/assets/images/about/'.$file_name;
                }
               $about->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'About Page Content updated successfully..',
                'redirect_url' => url('admin/about')

               ]);

             }else{
                
               $about = new About;
               $about->banner_heading = $request->banner_heading;
               $about->mission_desc = $request->mission_desc;
               $about->ceoMsg = $request->ceoMsg;
               $about->ceoName = $request->ceoName;
               $about->ceoDesignation = $request->ceoDesignation;
               $about->teamDesc = $request->teamDesc;
               if($request->hasFile('banner_image')){
                    $banner_image = $request->file('banner_image');
                    $file_name = 'icon_'.time().'.'.$banner_image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/about/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $banner_image->move( $destinationPath, $file_name );
                    $about->banner_image = 'frontend/assets/images/about/'.$file_name;
                }
               if($request->hasFile('ceo_image')){
                    $ceo_image = $request->file('ceo_image');
                    $file_name = 'icon_'.time().'.'.$ceo_image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/about/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $ceo_image->move( $destinationPath, $file_name );
                    $about->ceo_image = 'frontend/assets/images/about/'.$file_name;
                }
               $about->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'About Page Content add successfully.',
                'redirect_url' => url('admin/about')

               ]);
              
             }
             
            
         }else{

            if(!empty($id)){
              $about = About::findOrFail($id);
              return view('admin.about',compact('about'));
            }else{
              return view('admin.about');
            }

         }
     }

   


   
}
