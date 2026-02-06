<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class BlogController extends Controller {
    public function __construct() {
    }
    public function index(Request $request) {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blog.index', compact('blogs'));
    }
    public function add(Request $request) {

        
        if ($request->ajax()) {
            $blogs = new Blog;
            $blogs->title = $request->title;
            $blogs->description = $request->description;
            $blogs->slug = $this->createSlug($request->title);
            $blogs->meta_description             = $request->meta_description;
            $blogs->meta_title             = $request->meta_title;
            $blogs->meta_keyword             = $request->meta_keyword;
            $blogs->is_active = $request->is_active;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $file_name = 'img_' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('frontend/assets/images/blog/');
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath);
                }
                $image->move($destinationPath, $file_name);
                $blogs->image = 'frontend/assets/images/blog/' . $file_name;
            }
            $blogs->save();
            return response()->json(
                [
                 'success' => true,
                 'data' => [],
                 'message' => 'News add successfully.',
                 'redirect_url' => url('admin/news/add') ]);
        }
        return view('admin.blog.store');
    }

    public function edit(Request $request, $id = '') {
        $blogs = Blog::find($request->id);
        if ($request->ajax()) {
            $blogs->title = $request->title;
            $blogs->description = $request->description;
            $blogs->slug = $this->createSlug($request->title);
            $blogs->meta_description             = $request->meta_description;
            $blogs->meta_title             = $request->meta_title;
            $blogs->meta_keyword             = $request->meta_keyword;
            $blogs->is_active = $request->is_active;
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $file_name = 'img_' . time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('frontend/assets/images/blog/');
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath);
                }
                $image->move($destinationPath, $file_name);
                $blogs->image = 'frontend/assets/images/blog/' . $file_name;
            }
          
            $blogs->save();
            return response()->json([
                'success' => true,
                'data' => [],
                'message' => 'News updated successfully..', 
                'redirect_url' => url('admin/news/edit/' . $id) 
            ]);
        }

        return view('admin.blog.edit', compact('blogs'));
      
    }

    public function delete(Request $request, $id) {
        if (Blog::find($id)) {
            $blog = Blog::find($id);
            $blog->delete();
            return redirect()->back()->with('success', 'News  deleted successfully');
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
        return Blog::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();
    }
}
