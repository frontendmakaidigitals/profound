<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Communities;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CommunitiesController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
         
          $communities = Communities::where('is_active',1)->get();
          return view('admin.communities.index',compact('communities'));

    }
    

    public function add(Request $request,$id=''){

         if(!empty($request->submit)){
            $request->validate([
                 'name' => 'required',
             ]);

            
             if(!empty($request->id)){
               
               $communitiess = Communities::find($request->id); 
               $communitiess->name = $request->name;
               $communitiess->slug = $this->createSlug($request->name);
               $communitiess->is_active = $request->is_active;

                if($request->hasFile('image')){
                    $icon = $request->file('image');
                    $file_name = 'image_'.time().'.'.$icon->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/communities/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $icon->move( $destinationPath, $file_name );
                    $communitiess->image = 'frontend/assets/images/communities/'.$file_name;
                }
                $communitiess->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Communities updated successfully..',
                'redirect_url' => url('admin/communities')
                
               ]);
               
             }else{
                 
               $communitiess = new Communities;
               $communitiess->name = $request->name;
               $communitiess->slug = $this->createSlug($request->name);
               $communitiess->is_active = $request->is_active;
                if($request->hasFile('image')){
                    $icon = $request->file('image');
                    $file_name = 'image_'.time().'.'.$icon->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/communities/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    }
                    $icon->move( $destinationPath, $file_name );
                    $communitiess->image = 'frontend/assets/images/communities/'.$file_name;
                }
               $communitiess->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Communities add successfully.',
                'reload' => true

               ]);
          
             }  
         }
     }

      public function edit($id=''){
       
        $amenitiess = Communities::findOrFail($id);
        return response()->json([
          'data' => $amenitiess
        ]);
       
      }

     public function delete(Request $request, $id){
        
        if (Communities::find($id)) {
            $amenitiess = Communities::find($id);
            $amenitiess->delete();
            return redirect()->back()->with('success', 'Communities deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    } 

    public function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = Str::slug($title);
        $allSlugs = $this->getRelatedSlugs($slug, $id);
        if (! $allSlugs->contains('slug', $slug)){
            return $slug;
        }
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
        return Communities::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();
    }
   


   
}
