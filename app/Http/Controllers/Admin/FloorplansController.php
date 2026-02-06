<?php
namespace App\Http\Controllers\Admin;

use App\Models\Status;
use App\Models\Amenity;
use App\Models\Property;
use App\Models\Category;
use App\Models\Imagegallery;
use App\Models\Specification;
use App\Models\Accommodataion;
use App\Models\Neighbourhoods;
use App\Models\Communities;
use App\Models\Floorplan;
use App\Models\Floorplanheading;
use App\Models\Allfloorplans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class FloorplansController extends Controller 
{
    public function __construct() {

    }

    public function index(Request $request) {
        $properties = Floorplan::latest()->paginate(10);
        return view('admin.floorplans.index', compact('properties'));
    }

    public function add(Request $request, $id = '') {
        if ($request->ajax()) {
            $heading = [];
            $floorplan  = new Floorplan;
            if ($request->hasFile('main_image')) {
                $image = $request->file('main_image');
                $file_name = 'img_' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('frontend/assets/images/property/');
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath);
                }
                $image->move($destinationPath, $file_name);
                $floorplan->image = 'frontend/assets/images/property/' . $file_name;
            }
            $floorplan->category = $request->category;
            $floorplan->title = $request->title;   
            $floorplan->properties = $request->properties;
            $floorplan->slug = $this->createSlug($request->title);
            $floorplan->save();
         

            foreach($request->file('image') as $i => $imagefile) {
                $allfloorplans = new Allfloorplans;
                $file_name = 'img_' . rand() . '.' . $imagefile->getClientOriginalExtension();
                $destinationPath = public_path('frontend/assets/images/property/');
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath);
                }
                $imagefile->move($destinationPath, $file_name);
                $allfloorplans->image = 'frontend/assets/images/property/' . $file_name;
                $allfloorplans->name = $request->name[$i];
                $allfloorplans->floorplans_id = $floorplan->id;
                $allfloorplans->save();
            }
            return response()->json(['success' => true, 'data' => [], 'message' => 'Property add successfully.', 'redirect_url' => url('admin/floorplans/add') ]);
        }

      
        $property    = Property::pluck('title', 'id')->prepend('Select','');
        $category    = Category::pluck('name', 'id')->prepend('Select','');
        return view('admin.floorplans.store',compact('property','category'));
    }

   

      public function delete(Request $request, $id) {
        if (Floorplan::find($id)) {
            $floorplan = Floorplan::find($id);
            $floorplan->delete();
            $allfloorplans= Allfloorplans::where("floorplans_id","=",$id);
            $allfloorplans->delete();
            return redirect()->back()->with('success', 'floorplans deleted successfully');
            } else {
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
        return Property::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();
    }
}
