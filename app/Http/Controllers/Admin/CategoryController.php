<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
class CategoryController extends Controller {
    public function __construct() {
    }
    
    public function index(Request $request) {
        $categories = Category::latest()->paginate(10);
        return view('admin.category.index', compact('categories'));
    }

    public function add(Request $request, $id = '') {
        if (!empty($request->submit)) {
            $request->validate(['name' => 'required', ]);
            if (!empty($request->id)) {
                $category = Category::find($request->id);
                $category->name = $request->name;
                $category->is_active = $request->is_active;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $file_name = 'icon_' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/icon/');
                    if (!File::exists($destinationPath)) {
                        File::makeDirectory($destinationPath);
                    }
                    $image->move($destinationPath, $file_name);
                    $category->image = 'frontend/assets/images/icon/' . $file_name;
                }
                $category->save();
                return response()->json(['success' => true, 'data' => [], 'message' => 'Category updated successfully..', 'redirect_url' => url('admin/category') ]);
                return redirect()->route('admin.category.store');
            } else {
                $category = new Category;
                $category->name = $request->name;
                $category->is_active = $request->is_active;
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $file_name = 'icon_' . time() . '.' . $image->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/images/icon/');
                    if (!File::exists($destinationPath)) {
                        File::makeDirectory($destinationPath);
                    }
                    $image->move($destinationPath, $file_name);
                    $category->image = 'frontend/assets/images/icon/' . $file_name;
                }
                $category->save();
                return response()->json(['success' => true, 'data' => [], 'message' => 'Category add successfully.', 'redirect_url' => url('admin/category') ]);
                return redirect()->route('admin.category.store');
            }
        }
    }

    public function edit($id = '') {
        $amenitiess = Category::findOrFail($id);
        return response()->json(['data' => $amenitiess]);
    }

    public function delete(Request $request, $id) {
        if (Category::find($id)) {
            $amenitiess = Category::find($id);
            $amenitiess->delete();
            return redirect()->back()->with('success', 'Category deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Faield');
        }
    }
}
