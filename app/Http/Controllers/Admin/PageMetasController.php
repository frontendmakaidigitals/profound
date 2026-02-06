<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageMetas;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;


class PageMetasController extends Controller
{

    public function __construct(){

    }

    public function index(Request $request){
         
          $pageMetas = PageMetas::latest()->paginate(100);
          //dd($pageMetas);
          return view('admin.pageMetas.index',compact('pageMetas'));

    }
    

    public function add(Request $request,$id=''){

         if(!empty($request->submit)){
            $request->validate([
                 'page_url' => 'required',
                 'page_title' => 'required',
                 'page_keyword' => 'required',
                 'page_description' => 'required',
             ]);

            
             if(!empty($request->id)){
               
               $page = PageMetas::find($request->id); 
               $page->page_url = $request->page_url;
               $page->page_title = $request->page_title;
               $page->page_keywords = $request->page_keyword;
               $page->page_description = $request->page_description;

                
                $page->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Page Meta updated successfully..',
                'reload' => true

               ]);

             }else{
                 


               $page = new PageMetas;
               $page->page_url = $request->page_url;
               $page->page_title = $request->page_title;
               $page->page_keywords = $request->page_keyword;
               $page->page_description = $request->page_description;

                
                $page->save();
                return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Page Meta add successfully.',
                'reload' => true

               ]);
              
             }  
         }
     }

      public function edit($id=''){
       
        $page = PageMetas::findOrFail($id);
        return response()->json([
          'data' => $page
        ]);
       
      }

     public function delete(Request $request, $id){
        
        if (PageMetas::find($id)) {
            $page = PageMetas::find($id);
            $page->delete();
            return redirect()->back()->with('success', 'Page Meta deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Failed');
        }
    } 
   


   
}
