<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Validator;

class ApplicationController extends Controller
{
    public const REDIRECT_URL = 'admin/customers';

    public function __construct(){

    }

    public function index(Request $request){
        
        $applications = Application::orderBy('id','desc')->get();
        return view('admin.applications.index', compact('applications'));
    }

    public function store(Request $request){
        if ($request->isMethod('post') && $request->ajax()) {

            $messages = [
                'title'=>'Application title is Required ',
            ];
            $validator = Validator::make($request->all(), [
                'title'=>'required',
            ],$messages);

            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }

            $application = new Application;
            $application->title = $request->title;
            $application->save();
            return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Application has been Created.',
                'reload' => true

            ]);
        }
        return view('admin.applications.store');
    }

    public function edit(Request $request, $id){
        
        $application = Application::find($id);
        if ($request->isMethod('post') && $request->ajax()) {
            $messages = [
                'title'=>'Application title is Required ',
            ];
            $validator = Validator::make($request->all(), [
                'title'=>'required',
            ],$messages);

            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            $application->title = $request->title;
            $application->save();
            return response()->json([
                'success' => true,
                'data'   => [],
                'message'   =>'Application has been updated.',
                'reload' => true

            ]);
        }
        return view('admin.applications.edit',compact('application'));
        
    }

    public function delete(Request $request, $id){
        // dd('Ok');
        if (Application::find($id)) {
            $application = Application::find($id);
            $application->delete();
            return redirect()->back()->with('success', 'Application deleted successfully');
        }else {
            return redirect()->back()->with('error', 'Faield');
        }
    } 
}
