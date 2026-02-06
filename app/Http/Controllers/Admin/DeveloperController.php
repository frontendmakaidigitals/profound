<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class DeveloperController extends Controller
{
    public const REDIRECT_URL = 'admin/developers'; 

    public function __construct(){

    }

    public function index(Request $request){
        
        $developers = Developer::orderBy('id','desc')->get();
        // dd($developers);
        return view('admin.developers.index', compact('developers'));
    }

    public function store(Request $request){
        if ($request->isMethod('post') && $request->ajax()) {

            $messages = [
                'title'=>'Heading is Required ',
                'dev_logo'=>'Developer logo is Required',
            ];
            $validator = Validator::make($request->all(), [
                'title'=>'required',
                'dev_logo'=>'required',
              ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //dd($request->all());
            
            $developer = new Developer;
            $developer->title = $request->title;
            $developer->founded_in = $request->founded_in;
            $developer->based_in = $request->based_in;
            $developer->employees = $request->employees;
            $developer->valuation = $request->valuation;
            $developer->order_id = $request->order_id;
            $developer->is_active = $request->is_active;
            $developer->description = $request->description;
            $developer->slug = $this->createSlug($request->title);
            if($request->hasFile('dev_logo'))
                {
                    $image = $request->file('dev_logo');
                    $file_name = 'file_'.time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/developer/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    } 
                    $image->move( $destinationPath, $file_name );
                
                    $developer->dev_logo    = 'frontend/assets/images/developer/'.$file_name ;
                
                }
            $developer->save();
            return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Developer has been created.',
                'reload' => true

            ]);
        }
        return view('admin.developers.store');
    }


    public function edit(Request $request , $id){

        $developer = Developer::find($id);
        if ($request->isMethod('post') && $request->ajax()) {

            $messages = [
                'title'=>'Heading is Required ',
                // 'dev_logo'=>'Developer logo is Required',
            ];
            $validator = Validator::make($request->all(), [
                'title'=>'required',
                // 'dev_logo'=>'required',
              ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //dd($request->all());
            
            $developer->title = $request->title;
            $developer->founded_in = $request->founded_in;
            $developer->based_in = $request->based_in;
            $developer->employees = $request->employees;
            $developer->valuation = $request->valuation;
            $developer->order_id = $request->order_id;
            $developer->is_active = $request->is_active;
            $developer->description = $request->description;
            if($request->hasFile('dev_logo'))
                {
                    $image = $request->file('dev_logo');
                    $file_name = 'file_'.time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/developer/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    } 
                    $image->move( $destinationPath, $file_name );
                
                    $developer->dev_logo    = 'frontend/assets/images/developer/'.$file_name ;
                
                }
            $developer->save();
            return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Developer has been created.',
                'redirect_url' => url('admin/developers/edit/' . $id)
                //'reload' => true

            ]);
        }
        return view('admin.developers.edit',compact('developer'));
    }

    public function delete(Request $request, $id){
        // dd('Ok');
        if (Developer::find($id)) {
            $developer = Developer::find($id);
            $developer->delete();
            return redirect()->back()->with('success', 'Developer deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    }

    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = Str::slug($title);
        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        // If we haven't used it before then we are all good.
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }
        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug.'-'.$i;
            if (! $allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }
        throw new \Exception('Can not create a unique slug');
    }
    protected function getRelatedSlugs($slug, $id = 0)
    {
        return Developer::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();
    }

}



                