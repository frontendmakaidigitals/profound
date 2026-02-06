<?php
namespace App\Http\Controllers\Admin;

use Session;
use Mail;
use DB;
use App\Models\LandingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Crypt;


class LandingPageController extends Controller
{   
        
        public const REDIRECT_URL = 'admin/pages'; 

        public function __construct(){

        }
   
        public function index(Request $request)
        {
            $pages = LandingPage::orderBy('id','desc')->get();
            //dd($pages);
            return view('admin.pages.index', compact('pages'));
        }

        public function store(Request $request){
            if ($request->isMethod('post') && $request->ajax()) {

                $messages = [
                    'page_name'=>'Heading is Required ',
                    'page_url'=>'Image is Required',
                ];
                $validator = Validator::make($request->all(), [
                    'page_name'=>'required',
                    'page_url'=>'required',
                  ],$messages);

                if ($validator->fails()) {
                    return response()->json(['error'=>$validator->errors()], 401);
                }
                //dd($request->all());
                
                $page = new LandingPage;
                $page->page_name = $request->page_name;
                $page->page_heading = $request->page_heading;
                $page->meta_title = $request->meta_title;
                $page->meta_tag = $request->meta_tag;
                $page->meta_desc = $request->meta_desc;                
                $page->page_url = $request->page_url;
                $page->page_desc = $request->page_desc;

                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $file_name = 'img_'.time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/pages/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $image->move( $destinationPath, $file_name );
                    $page->image = 'frontend/assets/images/pages/'.$file_name;
                }

                $page->save();
                return response()->json([
                    'success' => true,
                    'data'   => [],
                    'message'   =>'Page has been created.',
                    'reload' => true

                ]);
            }
            return view('admin.pages.store');
        }

    public function edit(Request $request, $id){
        
        $page = LandingPage::find($id);

        if ($request->isMethod('post') && $request->ajax()) {
            // dd('ok');
             //Start Validation
            $messages = [
                    'page_name'=>'Heading is Required ',
                    'page_url'=>'Image is Required',
                ];
                $validator = Validator::make($request->all(), [
                    'page_name'=>'required',
                    'page_url'=>'required',
                  ],$messages);

                if ($validator->fails()) {
                    return response()->json(['error'=>$validator->errors()], 401);
                }
                //dd($request->all());
                $page->page_name = $request->page_name;
                $page->page_heading = $request->page_heading;
                $page->meta_title = $request->meta_title;
                $page->meta_tag = $request->meta_tag;
                $page->meta_desc = $request->meta_desc;                
                $page->page_url = $request->page_url;
                $page->page_desc = $request->page_desc;

                if($request->hasFile('image')){
                    $image = $request->file('image');
                    $file_name = 'img_'.time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/pages/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $image->move( $destinationPath, $file_name );
                    $page->image = 'frontend/assets/images/pages/'.$file_name;
                }

            $page->save();
            return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Page has been updated.',
                'reload' => true

            ]);
        }
        return view('admin.pages.edit',compact('page'));
    }


    public function delete(Request $request, $id){
        // dd('Ok');
        if (LandingPage::find($id)) {
            $page = LandingPage::find($id);
            $page->delete();
            return redirect()->back()->with('success', 'Page deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    }




}

