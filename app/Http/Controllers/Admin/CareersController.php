<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
class CareersController extends Controller {
    public function __construct() {
    }
    
    public function index(Request $request){
          $careers = Careers::latest()->get();
          return view('admin.careers.index',compact('careers'));
    }
    public function deleteCareer(Request $request){
       $array = explode(',', $request->id);
      
       foreach($array as $id){
           $slider = Careers::find($id);
           $imgFilePath = $slider->cv;
              if(File::exists($imgFilePath)) {
    File::delete($imgFilePath);
}
            $slider->delete();
       }
          return redirect()->back()->with('success', 'data deleted successfully');
    }
    
    public function delete(Request $request, $id) {
        if (Careers::find($id)) {
            $slider = Careers::find($id);
            $imgFilePath = $slider->cv;
              if(File::exists($imgFilePath)) {
    File::delete($imgFilePath);
}
            $slider->delete();
            return redirect()->back()->with('success', 'data deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Failed');
        }
    }
}
