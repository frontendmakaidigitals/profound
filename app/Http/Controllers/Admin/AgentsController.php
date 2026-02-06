<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Developer;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Hash;


class AgentsController extends Controller
{
    public const REDIRECT_URL = 'admin/agents'; 

    public function __construct(){

    }

    public function index(Request $request){
        
        $agents = User::whereHas('roles', function($q){
            $q->where('name', 'agent');
      })->orderBy('id','desc')->paginate(15);
        return view('admin.agents.index', compact('agents'));
    }


        public function store(Request $request ){

        if ($request->isMethod('post') && $request->ajax()) {

            $messages = [
                'name'=>'Heading is Required ',
                // 'image'=>'Agent Image is Required',
            ];
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                // 'image'=>'required',
              ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //dd($request->all());
            $agent = new User;
            $agent->first_name = $request->name;
            $agent->phone = $request->phone;
            $agent->email = $request->email;
            $agent->agent_brn = $request->agent_brn;
            $agent->password = Hash::make('123456');
            $agent->setMeta('whatsapp' , $request->whatsapp);
            $agent->setMeta('experience' , $request->experience);
            $agent->setMeta('specialization' , $request->specialization);
            $agent->setMeta('languages' , $request->languages);
            $agent->setMeta('designation' , $request->designation);
            $agent->slug = $this->createSlug($request->name);
            $agent->description = $request->description;
            $agent->agent_order = $request->agent_order;
            
            if($request->hasFile('image'))
                {
                    $image = $request->file('image');
                    $file_name = 'file_'.time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/developer/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    } 
                    $image->move( $destinationPath, $file_name );
                
                    $agent->image    = 'frontend/assets/images/developer/'.$file_name ;
                
                }
            $agent->save();
            $agent->roles()->attach(Role::where('name', 'agent')->first());
            return response()->json([
                'success' => true,
                // 'data'   => [],
                'message'   =>'Agent has been created.',
                //'redirect_url'   =>url(self::REDIRECT_URL),
                'reload' => false

            ]);
        }
        return view('admin.agents.store');
    }
    
    public function edit(Request $request , $id){

        $agent = User::find($id);
        if ($request->isMethod('post') && $request->ajax()) {

            $messages = [
                'name'=>'Heading is Required ',
                // 'image'=>'Agent Image is Required',
            ];
            $validator = Validator::make($request->all(), [
                'name'=>'required',
                // 'image'=>'required',
              ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //dd($request->all());
            
            $agent->first_name = $request->name;
            $agent->phone = $request->phone;
            $agent->agent_brn = $request->agent_brn;
            $agent->email = $request->email;
            $agent->setMeta('whatsapp' , $request->whatsapp);
            $agent->setMeta('experience' , $request->experience);
            $agent->setMeta('specialization' , $request->specialization);
            $agent->setMeta('languages' , $request->languages);
            $agent->setMeta('designation' , $request->designation);
            $agent->description = $request->description;
            $agent->slug = $this->createSlug($request->name);
            $agent->agent_order = $request->agent_order;
            
            if($request->hasFile('image'))
                {
                    $image = $request->file('image');
                    $file_name = 'file_'.time().'.'.$image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/developer/');
                    if (! File::exists($destinationPath)){
                        File::makeDirectory( $destinationPath );
                    } 
                    $image->move( $destinationPath, $file_name );
                
                    $agent->image    = 'frontend/assets/images/developer/'.$file_name ;
                
                }
            $agent->save();
            return response()->json([
                'success' => true,
                //'data'   => [],
                'message'   =>'Agent has been Updated.',
                'redirect_url'   =>url(self::REDIRECT_URL),
                'reload' => false

            ]);
        }
        return view('admin.agents.edit',compact('agent'));
    }

    public function delete(Request $request, $id){
        // dd('Ok');
        if (User::find($id)) {
            $agent = User::find($id);
            $agent->delete();
            return redirect()->back()->with('success', 'Agent deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    }

    public function createSlug($name, $id = 0)
    {
        // Normalize the title
        $slug = Str::slug($name);
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
        return User::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();
    }

}



                