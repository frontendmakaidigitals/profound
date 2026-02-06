<?php

namespace App\Http\Controllers\Admin;



use App\Models\Status;

use App\Models\Amenity;

use App\Models\Property;

use App\Models\Bedroom;

use App\Models\Category;

use App\Models\Imagegallery;

use App\Models\Specification;

use App\Models\Accommodataion;

use App\Models\Neighbourhoods;

use App\Models\Communities;

use App\Models\User;

use App\Models\Role;

use App\Models\Developer;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

use Hash;

class PropertyController extends Controller 

{

    public function __construct() {



    }



    public function index(Request $request) {

        //$properties = Property::latest()->paginate(1000);

        $properties = Property::Where('is_crm', 0)->latest()->get();

      
        return view('admin.property.index', compact('properties'));

    }



    public function add(Request $request, $id = '') {

        if ($request->ajax()) {

            $property      = new Property;

            $messages = [
              'cover_image'                 => 'Main Image size must not be grater then 300KB.',
              'main_image'                  => 'Cover Image size must not be grater then 300KB..',
              'qrcode'                  => 'QR Code Image size must not be grater then 300KB..',
            ];
            $validator = Validator::make($request->all(), [
                'cover_image'             => 'file|max:30000',
                'main_image'              => 'file|max:30000',
                'qrcode'              => 'file|max:30000',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }

            if ($request->hasFile('main_image')) {

                $image = $request->file('main_image');

                $file_name = 'imge_' . time() . '.' . $image->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $image->move($destinationPath, $file_name);

                $property->image = 'frontend/assets/images/property/' . $file_name;

            }

            



            if ($request->hasFile('cover_image')) {

                $cover_image = $request->file('cover_image');

                $file_name = 'img_' . time() . '.' . $cover_image->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $cover_image->move($destinationPath, $file_name);

                $property->cover_image = 'frontend/assets/images/property/' . $file_name;

            }
            
            if ($request->hasFile('qrcode')) {

                $qrcode = $request->file('qrcode');

                $file_name = 'img_' . time() . '.' . $qrcode->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/qrcode/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $qrcode->move($destinationPath, $file_name);

                $property->qrcode = 'frontend/assets/images/property/qrcode/' . $file_name;

            }

            

            if ($request->status_id == '2'){

                $property_source  = '299-offplan';

            }

            $property->is_feature           =$request->is_feature;

            $property->main_title           = $request->main_title;

            $property->sub_title            = $request->sub_title;

            $property->title                = $request->title;

            $property->description          = $request->description;

            $property->features             = $request->features;

            $property->amenities_description  = $request->amenity_description;

            $property->area                 = $request->area;

            // $property->bedrooms             = $request->bedrooms;

            $property->bathrooms            = $request->bathrooms;

            $property->parking_space        = $request->parking_space;

            $property->status               = $request->status_id;

            $property->category             = $request->category_id;

            $property->communities          = $request->communities_id;

            $property->price                = $request->price;

            $property->rating               = $request->rating;

            $property->property_type        = $request->property_type;

            $property->address              = $request->address;

            $property->address_latitude     = $request->address_latitude;

            $property->address_longitude    = $request->address_longitude;

            $property->slug                 = $this->createSlug($request->main_title);

            $property->developer            = $request->developer;

            $property->property_source      = $property_source;
            $property->property_status      = $request->status_id;
            $property->meta_description             = $request->meta_description;
            $property->meta_title             = $request->meta_title;
            $property->meta_keyword             = $request->meta_keyword;

           // slug

            

            if ($request->hasFile('brochure')) {

                $brochure = $request->file('brochure');

                $file_name = 'img_' . time() . '.' . $brochure->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $brochure->move($destinationPath, $file_name);

                $property->brochure = 'frontend/assets/images/property/' . $file_name;

            }



            if($request->hasFile('floor_plan')) {

                $floor_plan = $request->file('floor_plan');

                $file_name = 'img_' . time() . '.' . $floor_plan->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $floor_plan->move($destinationPath, $file_name);

                $property->floor_plan = 'frontend/assets/images/property/' . $file_name;

            }

          

            $property->save();

            $property->amenities()->attach($request->amenity_id);

            $property->accommodataions()->attach($request->accommodataion_id);

            $property->neighbourhoodss()->attach($request->neighbourhoods_id);

            $property->specifications()->attach($request->specifications_id);

            $property->propertyBedrooms()->attach($request->bedrooms);


            if(!empty($request->file('galleryimage'))){

                foreach ($request->file('galleryimage') as $imagefile) {

                    $imagegallerys = new Imagegallery;

                    $file_name = 'img_' . rand() . '.' . $imagefile->getClientOriginalExtension();

                    $destinationPath = public_path('frontend/assets/images/property/');

                    if (!File::exists($destinationPath)) {

                        File::makeDirectory($destinationPath);

                    }

                    $imagefile->move($destinationPath, $file_name);

                    $imagegallerys->galleryimage = 'frontend/assets/images/property/' . $file_name;

                    $imagegallerys->property_id = $property->id;

                    $imagegallerys->save();

                }
            }


            return response()->json(['success' => true, 'data' => [], 'message' => 'Property add successfully.', 'redirect_url' => url('admin/property/add') ]);

        }

        $amenitiess     = Amenity::pluck('name', 'id');

        $accommodataion = Accommodataion::pluck('name', 'id');

        $neighbourhoods = Neighbourhoods::pluck('name', 'id');

        $specification  = Specification::pluck('heading_one', 'id');

        $categories     = Category::pluck('name', 'id');

        $statuses       = Status::pluck('name', 'id');

        $developer      = Developer::pluck('title', 'id');

        $communities    = Communities::pluck('name', 'id');

        $bedrooms    = Bedroom::pluck('bedrooms', 'id');

        // dd($bedrooms);

        return view('admin.property.store', compact('amenitiess', 'accommodataion', 'neighbourhoods', 

            'specification', 'categories','statuses','developer','communities','bedrooms'));

    }



    public function edit(Request $request, $id = '') {

        $property = Property::find($request->id);

        if ($request->ajax()) {

             $messages = [
              'cover_image'                 => 'Main Image size must not be grater then 300 KB.',
              'main_image'                  => 'Cover Image size must not be grater then 300 KB.',
              'qrcode'                  => 'QR Image size must not be grater then 300 KB.',
            ];
            $validator = Validator::make($request->all(), [
                'cover_image'             => 'file|max:30000',
                'main_image'              => 'file|max:30000',
                'qrcode'              => 'file|max:30000',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }

            $property->title                 = $request->title;
            
            $property->is_feature           =$request->is_feature;

            $property->description           = $request->description;

            $property->features              = $request->features;

            $property->amenities_description = $request->amenities_description;

            $property->area                  = $request->area;

            // $property->bedrooms              = $request->bedrooms;

            $property->bathrooms             = $request->bathrooms;

            $property->parking_space         = $request->parking_space;

            $property->category              = $request->category_id;

            $property->communities           = $request->communities_id;

            $property->status                = $request->status_id;

            $property->price                 = $request->price;

            $property->rating                = $request->rating;

            $property->property_type         = $request->property_type;

            $property->address               = $request->address;

            $property->address_latitude      = $request->address_latitude;

            $property->address_longitude     = $request->address_longitude;

            $property->is_active             = $request->is_active;

            $property->main_title            = $request->main_title;

            $property->sub_title             = $request->sub_title;

            $property->developer             = $request->developer; 
            $property->meta_description             = $request->meta_description;
            $property->meta_title             = $request->meta_title;
            $property->meta_keyword             = $request->meta_keyword;

            

            if ($request->hasFile('main_image')) {

                $image = $request->file('main_image');

                $file_name = 'imge_' . time() . '.' . $image->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $image->move($destinationPath, $file_name);

                $property->image = 'frontend/assets/images/property/' . $file_name;

            }



            if ($request->hasFile('cover_image')) {

                $cover_image = $request->file('cover_image');

                $file_name = 'img_' . time() . '.' . $cover_image->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $cover_image->move($destinationPath, $file_name);

                $property->cover_image = 'frontend/assets/images/property/' . $file_name;

            }
            
            if ($request->hasFile('qrcode')) {

                $qrcode = $request->file('qrcode');

                $file_name = 'img_' . time() . '.' . $qrcode->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/qrcode/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $qrcode->move($destinationPath, $file_name);

                $property->qrcode = 'frontend/assets/images/property/qrcode/' . $file_name;

            }

            if ($request->hasFile('brochure')) {

                $brochure = $request->file('brochure');

                $file_name = 'img_' . time() . '.' . $brochure->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $brochure->move($destinationPath, $file_name);

                $property->brochure = 'frontend/assets/images/property/' . $file_name;

            }

            if ($request->hasFile('floor_plan')) {

                $floor_plan = $request->file('floor_plan');

                $file_name = 'img_' . time() . '.' . $floor_plan->getClientOriginalExtension();

                $destinationPath = public_path('frontend/assets/images/property/');

                if (!File::exists($destinationPath)) {

                    File::makeDirectory($destinationPath);

                }

                $floor_plan->move($destinationPath, $file_name);

                $property->floor_plan = 'frontend/assets/images/property/' . $file_name;

            }


            $property->save();

            if(!empty($request->file('galleryimage'))){

                foreach ($request->file('galleryimage') as $imagefile) {

                    $exisrImage = Imagegallery::where('property_id',$property->id)->first();

                    $imagegallerys = $exisrImage ? $exisrImage : new Imagegallery;

                    $file_name = 'img_' . rand() . '.' . $imagefile->getClientOriginalExtension();

                    $destinationPath = public_path('frontend/assets/images/property/');

                    if (!File::exists($destinationPath)) {

                        File::makeDirectory($destinationPath);

                    }

                    $imagefile->move($destinationPath, $file_name);

                    $imagegallerys->galleryimage = 'frontend/assets/images/property/' . $file_name;

                    $imagegallerys->property_id = $property->id;

                    $imagegallerys->save();

                }
            }
            // dd($request->bedrooms);

            $property->amenities()->sync($request->amenity_id);

            $property->accommodataions()->sync($request->accommodataion_id);

            $property->neighbourhoodss()->sync($request->neighbourhoods_id);

            $property->specifications()->sync($request->specifications_id);

            $property->propertyBedrooms()->sync($request->bedrooms);

            return response()->json(['success' => true, 'data' => [], 'message' => 'Property updated successfully..', 'redirect_url' => url('admin/property/edit/' . $id) ]);

        }

        $amenitiess     = Amenity::pluck('name', 'id');

        $accommodataion = Accommodataion::pluck('name', 'id');

        $neighbourhoods = Neighbourhoods::pluck('name', 'id');

        $specification  = Specification::pluck('heading_one', 'id');

        $categories     = Category::pluck('name', 'id');

        $statuses       = Status::pluck('name', 'id');

        $developer      = Developer::pluck('title', 'id');

        $communities    = Communities::pluck('name', 'id');

        $bedrooms    = Bedroom::pluck('bedrooms', 'id');

        return view('admin.property.edit', compact('property','amenitiess','accommodataion','neighbourhoods','specification','categories','statuses','communities','developer','bedrooms'));

    }



    public function addxml() {

    

        $apiURL     = 'https://crm.homeland.ae/feeds/propertyFinder.php';

        $xmlString  = file_get_contents('https://crm.homeland.ae/feeds/propertyFinder.php');

        $xmlObject  = json_decode(json_encode(simplexml_load_string($xmlString, 'SimpleXMLElement', LIBXML_NOCDATA),true), true); 

        $json       = json_encode($xmlObject);

        $phpArray   = json_decode($json, true); 

        foreach($phpArray['property'] as $key => $value) {

            //dd($value);

            $allraedy = Property::where('reference_number',$value['reference_number'])->first();

            if(empty($allraedy)){

                $property   = new Property;

                $img = $value['photo']['url']['0'];

                $img = str_replace(' ', '', $img);

                $newimg = str_replace('https://housefindercrm.com/','https://crm.homeland.ae/',$img);

                $property->image = $newimg;

                $property->cover_image = $newimg;



                $property->reference_number     = $value['reference_number'];

                  if($value['agent']['id']){

                   $user = User::where('id',$value['agent']['id'])->first();

                   if(!empty($user)){

                       $property->agent_id  = $user->id;

                   }else{

                   $users = new User;

                   $users->first_name = $value['agent']['name'];

                   $users->email = $value['agent']['email'];

                   $users->phone = $value['agent']['phone'];

                   $users->password =  Hash::make('123456');

                   $users->save();

                   $property->agent_id  = $users->id;

                   }

                }



                // print_r( $value['features']); die();

                $property->main_title           = $value['title_en'];

                $property->sub_title            = $value['title_en'];

                $property->title                = $value['title_en'];

                $property->description          = $value['description_en'];

                if(!empty($value['features'])){

                    $property->features             = $value['features'];

                }

                $property->amenities_description  = 'NULL';

                if(!empty($value['size'])){

                    $property->area                 = $value['size'];

                }

                if(!empty($value['bedroom'])){

                    $property->bedrooms             = $value['bedroom'];

                }

                if(!empty($value['bathroom'])){

                    $property->bathrooms            = $value['bathroom'];

                }

                if(!empty($value['parking'])){

                    $property->parking_space        = $value['parking'];

                }



                $str    = $value['reference_number'];

                $rf     =  explode("-",$str);

                if($rf[0] == 'HLR'){

                   $property->property_status                =  '1';

                }elseif ($rf[0] == 'HLS') {

                    $property->property_status               =  '2';

                }

                

                if($value['completion_status'] == 'completed'){

                   $property->status   = '6';

                }elseif($value['completion_status'] == 'off_plan') {

                   $property->status   = '2';  

                }

                        

                $property->category = 'NULL';

                if($value['community']){

                   $communities = Communities::where('name',$value['community'])->first();

                   if(!empty($communities)){

                       $property->communities  = $communities->id;

                   }else{

                   $communitiess = new Communities;

                   $communitiess->name =$value['community'];

                   $communitiess->slug = $this->createSlug($value['community']);

                   $communitiess->is_active = '1';

                   $communitiess->save();

                   $property->communities  = $communitiess->id;

                   }

                }



                if(!empty($value['price'])){

                   $property->price                = $value['price'];

                }

                $property->rating               = '5';

                $property->property_type        = 'NULL';

                if(!empty($value['city'])){

                  $property->address              = $value['city'];

                }

                if($value['geopoints']){

                  $geopoints = explode(',',$value['geopoints']);

                  $latitude = $geopoints[0];

                  $longitude = $geopoints[1];

                  $property->address_latitude     = $latitude;

                  $property->address_longitude    = $longitude;

                }

                $property->slug                 = $this->createSlug($value['title_en']);

                $property->developer            = 'NULL';

                $property->old_agent_id         = $value['agent']['id'];

                

                $existsuser     = User::where('email',$value['agent']['email'])->first();

                $user           = $existsuser ? $existsuser : new User;

                $user->name     = $value['agent']['name'];

                $user->email    = $value['agent']['email'];

                $user->phone    = $value['agent']['phone'];

                $user->password = Hash::make('123456');

                $user->save();

                $user->roles()->attach(Role::where('name','agent')->first());

                $property->agent_id  = $user->id;

                $property->permit_number= $value['permit_number'];

                $property->furnished= $value['furnished'];

                $property->save();

                 

                if($value['property_type'] == 'AP'){

                    $accommodataion = '3';

                }elseif($value['property_type'] == 'OF'){

                    $accommodataion = '1';

                }elseif($value['property_type'] == 'TH'){

                     $accommodataion = '5';

                }elseif($value['property_type'] == 'VH'){

                     $accommodataion = '4';

                }elseif($value['property_type'] == 'SH'){

                     $accommodataion = '2';

                }else{

                     $accommodataion = ' ';

                }

                

                $property->accommodataions()->attach($accommodataion);



                foreach ($value['photo']['url'] as $keys => $img) {

                    $imagegallerys = new Imagegallery;

                    $newimg = str_replace('https://housefindercrm.com/', 'https://crm.homeland.ae/', $img);

                    $imagegallerys->galleryimage =$newimg;

                    $imagegallerys->property_id = $property->id;

                    $imagegallerys->save();

                }  

                

            }else{

                $property   = Property::find($allraedy->id); 

                $img = $value['photo']['url']['0'];

                $img = str_replace(' ', '', $img);

                $newimg = str_replace('https://housefindercrm.com/','https://crm.homeland.ae/', $img);

                $property->image = $newimg;

                $property->cover_image = $newimg;

                $property->reference_number     = $value['reference_number'];

                if($value['agent']['id']){

                    $existsuser = User::where('email',$value['agent']['email'])->first();

                    if(!empty($existsuser)){

                        $property->agent_id  = $existsuser->id;

                    }else{

                        $users              = new User;

                        $users->first_name  = $value['agent']['name'];

                        $users->email       = $value['agent']['email'];

                        $users->phone       = $value['agent']['phone'];

                        $users->password    =  Hash::make('123456');

                        $users->save();

                        $property->agent_id  = $users->id;

                        $users->roles()->attach(Role::where('name','agent')->first());

                    }

                }



                //  print_r( $value['features']); die();

                $property->main_title           = $value['title_en'];

                $property->sub_title            = $value['title_en'];

                $property->title                = $value['title_en'];

                $property->description          = $value['description_en'];

                if(!empty($value['features'])){

                    $property->features             = $value['features'];

                }

                $property->amenities_description  = 'NULL';

                if(!empty($value['size'])){

                    $property->area = $value['size'];

                }

                if(!empty($value['bedroom'])){

                    $property->bedrooms = $value['bedroom'];

                }

                if(!empty($value['bathroom'])){

                    $property->bathrooms = $value['bathroom'];

                }

                if(!empty($value['parking'])){

                    $property->parking_space = $value['parking'];

                }

            

                $str = $value['reference_number'];

                $rf =  explode("-",$str);

                if($rf[0] == 'HLR'){

                   $property->property_status  =  '1';

                }elseif ($rf[0] == 'HLS') {

                    $property->property_status =  '2';

                }else{

                    

                }

                

                if($value['completion_status'] == 'completed'){

                   $property->status = '6';

                }elseif($value['completion_status'] == 'off_plan') {

                   $property->status = '2';  

                }else{

                  $property->property_source = '299-offplan';   

                }  

          

                $property->category = 'NULL';

                if($value['community']){

                   $communities = Communities::where('name',$value['community'])->first();

                   if(!empty($communities)){

                       $property->communities  = $communities->id;

                   }else{

                   $communitiess            = new Communities;

                   $communitiess->name      = $value['community'];

                   $communitiess->slug      = $this->createSlug($value['community']);

                   $communitiess->is_active = '1';

                   $communitiess->save();

                   $property->communities   = $communitiess->id;

                   }

                }



                if(!empty($value['price'])){

                   $property->price                = $value['price'];

                }

                $property->rating               = '5';

                $property->property_type        = 'NULL';

                if(!empty($value['city'])){

                  $property->address              = $value['city'];

                }

                if($value['geopoints']){

                  $geopoints                    = explode(',',$value['geopoints']);

                  $latitude                     = $geopoints[0];

                  $longitude                    = $geopoints[1];

                  $property->address_latitude   = $latitude;

                  $property->address_longitude  = $longitude;

                }

                $property->slug         = $this->createSlug($value['title_en']);

                $property->developer    = 'NULL';

                $property->permit_number= $value['permit_number'];

                $property->furnished    = $value['furnished'];

                $property->save();

            

                if($value['property_type'] == 'AP'){

                    $accommodataion = '3';

                }elseif($value['property_type'] == 'OF'){

                    $accommodataion = '1';

                }elseif($value['property_type'] == 'TH'){

                     $accommodataion = '5';

                }elseif($value['property_type'] == 'VH'){

                     $accommodataion = '4';

                }elseif($value['property_type'] == 'SH'){

                     $accommodataion = '2';

                }else{

                     $accommodataion = ' ';

                }

            

                $property->accommodataions()->sync($accommodataion);



                foreach ($value['photo']['url'] as $keys => $img) {

                    $imagegallerys                  = new Imagegallery;

                    $newimg                         = str_replace('https://housefindercrm.com/', 'https://crm.homeland.ae/', $img);

                    $imagegallerys->galleryimage    = $newimg;

                    $imagegallerys->property_id     = $property->id;

                    $imagegallerys->save();

                }  

            }

        }

        return response()->json([

            'success'       => true, 

            'data'          => [], 

            'message'       => 'Property add successfully.', 

            'redirect_url'  => url('admin/property/add') 

        ]);

    }



    public function delete(Request $request, $id) {

        if (Property::find($id)) {

            $slider = Property::find($id);

            $slider->delete();

            return redirect()->back()->with('success', 'Slider deleted successfully');

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

