<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class SliderController extends Controller
{
    //
    public const REDIRECT_URL = 'admin/sliders'; 

    public function __construct(){

    }

    public function index(Request $request){
        
        $sliders = Slider::orderBy('id','desc')->get();
        // dd($sliders);
        return view('admin.sliders.index', compact('sliders'));
    }

    public function store(Request $request){
        if ($request->isMethod('post') && $request->ajax()) {

            $messages = [
                'heading_one'=>'Heading is Required ',
                'image'=>'Image is Required',
                'page_url'=>'Image is Required',
            ];
            $validator = Validator::make($request->all(), [
                'heading_one'=>'required',
                'image'=>'required',
                'page_url'=>'required',
              ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //dd($request->all());
            
            $slider = new Slider;
            $slider->heading_one = $request->heading_one;
            $slider->heading_two = $request->heading_two;
            $slider->page_url = $request->page_url;
            $slider->image = $request->image;
            if($request->hasFile('image')){
                $image = $request->file('image');
                $file_name = 'img_'.time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('frontend/assets/images/banners/');
                if (! File::exists($destinationPath)){
                    File::makeDirectory( $destinationPath );
                }
                $image->move( $destinationPath, $file_name );
                $slider->image = 'frontend/assets/images/banners/'.$file_name;
            }
            $slider->save();
            return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Banner has been created.',
                'reload' => true

            ]);
        }
        return view('admin.sliders.store');
    }

    public function edit(Request $request, $id){

        
        $slider = Slider::find($id);

        if ($request->isMethod('post') && $request->ajax()) {
            $messages = [
                'heading_one'=>'Heading is Required ',
                'page_url'=>'Image is Required',
              ];
              $validator = Validator::make($request->all(), [
                'heading_one'=>'required',
                'page_url'=>'required',
              ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            $slider->heading_one = $request->heading_one;
            $slider->heading_two = $request->heading_two;
             $slider->page_url = $request->page_url;
            if(!empty($request->file('image'))){
            $slider->image = $request->image;
             if($request->hasFile('image')){
                $image = $request->file('image');
                $file_name = 'img_'.time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('frontend/assets/images/banners/');
                if (! File::exists($destinationPath)){
                    File::makeDirectory( $destinationPath );
                }
                $image->move( $destinationPath, $file_name );
                $slider->image = 'frontend/assets/images/banners/'.$file_name;
             }
            }
            $slider->save();
            return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Banner has been updated.',
                'redirect_url' => url('admin/slider/edit/'.$id)

            ]);
        }
        return view('admin.sliders.edit',compact('slider'));
    }


    public function delete(Request $request, $id){
        // dd('Ok');
        if (Slider::find($id)) {
            $slider = Slider::find($id);
            $slider->delete();
            return redirect()->back()->with('success', 'Banner deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Failed');
        }
    } 


   
}
