<?php

namespace App\Http\Controllers;



use Mail;

use App\Models\Status;

use App\Models\Amenity;

use App\Models\Property;

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

use Carbon\Carbon;

use Hash;



class CronController extends Controller 

{

    public function __construct() {



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

        for ($i = 1; $i <= 20; $i++) {

            $newSlug = $slug.'-'.$i;

            if (! $allSlugs->contains('slug', $newSlug)) {

                return $newSlug;

            }

        }

        throw new \Exception('Can not create a unique slug');

    }



    public function createCommunitySlug($title, $id = 0)

    {

        // Normalize the title 

        /*if(is_array($title) || is_object($title)) {

            $title = $title[0];

        }*/

        $slug = Str::slug($title);        

        $allSlugs = $this->getCommunitySlugs($slug, $id);        

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

        return Property::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();

    }

    protected function getCommunitySlugs($slug, $id = 0)

    {

        return Communities::select('slug')->where('slug', 'like', $slug.'%')->where('id', '<>', $id)->get();

    }



   



    public function addxml() { 

        $apiURL     = 'https://expert.propertyfinder.ae/feed/profoundre/propertyfinder/980c28fb80071ce61e50d14441535e0f';

        $xmlString  = file_get_contents($apiURL);

        $xmlObject   = json_decode(json_encode(simplexml_load_string($xmlString, 'SimpleXMLElement', LIBXML_NOCDATA),true), true);

        $json       = json_encode($xmlObject);

        $phpArray   = json_decode($json, true);  
        
        $propertAll = Property::where('reference_number','!=', NULL)->get();
       
        foreach($propertAll as $prop){
            $flag = 0;
            foreach($phpArray['property'] as $key => $value){
                if($prop['reference_number'] == $value['reference_number']){
                    $flag = 1;
                    break;
                }else{
                    $flag = 0;
                }
            }
            if($flag == 0){
                $propDel = Property::where('id','=', $prop['id'])->first();
                $gallDelProp = Imagegallery::where('property_id',$prop['id'])->get();
                foreach($gallDelProp as $gallr){
                    $gallr->delete();
                }
                
                $propDel->accommodataions()->detach();
                
                //dd($propDel);
                $propDel->delete();
            }
        }


        

  

        foreach($phpArray['property'] as $key => $value) {

             // dd($value['photo']['url']['0']);
            //  dd(array_keys($phpArray['property']));

            $allraedy               = Property::where('reference_number',$value['reference_number'])->first();



            

            $property               = $allraedy ? $allraedy : new Property;

            $img                    = count($value['photo']['url']) > 0 ? $value['photo']['url']['0'] : NULL;

            $property->image        = $img;

            $property->cover_image  = $img;

            
            if(isset($value['title_en'])!=[]){

                $property->main_title               = $value['title_en'];

            }

            if(isset($value['property_name']) != []){

                $property->sub_title                = $value['property_name'];

            }

            if(isset($value['reference_number']) != []){

                $property->reference_number         = $value['reference_number'];

            }

            if(isset($value['permit_number'])!=[]){

                $property->permit_number               = $value['permit_number'];

            }

            if(isset($value['title_en']) != []){

                $property->title                    = $value['title_en'];

            }

            if(isset($value['description_en']) && $value['description_en'] != []){

                $property->description              = isset($value['description_en'])?$value['description_en']:'';

            }



                // if(isset($value['features']) && $value['features'] != []){

                // $property->features                 = isset($value['features'])?$value['features']:'';

               

                // }

                // if(isset($value['private_amenities']) && $value['private_amenities'] != []){

                //     $property->amenities_description    = isset($value['private_amenities'])?$value['private_amenities']:'';

                // }

                if(isset($value['size']) && $value['size'] != []){

                    $property->area                     = isset($value['size'])?$value['size']:'';

                }

                $property->is_crm                   = 1; // 1 = crm property 

                // $property->bedrooms                 = isset($value['bedroom']) ? $value['bedroom']:'';

                if(isset($value['bedroom']) !=[]){

                    $property->bedrooms            = isset($value['bedroom']) ? $value['bedroom']:'';

                }

                if(isset($value['bathroom']) !=[]){

                    $property->bathrooms            = isset($value['bathroom']) ? $value['bathroom']:'';

                }

                // if($value['bathroom'] !=[]){

                //     $property->bathrooms                = isset($value['bathroom']) ? $value['bathroom']:'';

                // }

                // if ($value['floor'] != []) {

                //     if(is_array($value['floor']) || is_object($value['floor'])) {

                //         $floor = 0;

                //     }else{

                //         $floor = isset($value['floor']) ? $value['floor'] : 0;

                //     } 

                //     $property->floor                    = $floor;

                // }

                

                if (isset($value['parking']) != [] && $value['parking'] != '') {

                     //for sale or rent 

                    $property->parking_space   =  $value['parking'];

                }
                if (isset($value['furnished']) != [] && $value['furnished'] != '') {

                     //for sale or rent 

                    $property->furnished   =  $value['furnished'];

                }

                    

                if(isset($value['completion_status']) != [] && $value['completion_status'] != ''){
                    $stat = Status::where('name','Like', $value['completion_status'])->first();

                    $property->property_status   =  !empty($stat) ? $stat->id : NULL;

                }

                

                

                $property->category         = NULL; 

                // Save Community

                

if(is_array($value['price']) || is_object($value['price'])) {
                $property->price = $value['price']['yearly'];
            }else{
                $property->price = isset($value['price']) ? $value['price'] : '';
            }

               
                    
                // Cs-Commercial for sale & RS->residence for sale
                if (isset($value['offering_type'])!=[] && $value['offering_type']!='') {

                    if($value['offering_type']=='RS'){

                        $property->status            = '4';

                    }elseif($value['offering_type'] =='CS'){

                        $property->status            = '4';

                    }elseif($value['offering_type'] =='CR'){

                        $property->status            = '1';

                    }elseif($value['offering_type'] =='RR'){

                        $property->status            = '1';

                    }

                }  

                // PH-> Penthouse, AP-Apartment, VH- Villa, FF-Office

                if (isset($value['property_type'])!=[] && $value['property_type']!='') {

                    if($value['property_type']=='PH'){

                        $accommodataions_id = 6;

                    }elseif($value['property_type'] =='AP'){

                        $accommodataions_id = 3;

                    }elseif($value['property_type'] =='VH'){

                        $accommodataions_id = 4;

                    }elseif($value['property_type'] =='FF'){

                        $accommodataions_id = 9;

                    }elseif($value['property_type'] =='TH'){

                        $accommodataions_id = 5;

                    }elseif($value['property_type'] =='LP'){

                        $accommodataions_id = 10;

                    }
                    

                }  

                $property->is_active        = '1';

                $property->accommodation        = $accommodataions_id;

                // dd($price);

                // if($value['property_type'] != []){

                //     $property->property_type    = isset($value['property_type'])?$value['property_type']:'';

                // }

                if(isset($value['city']) != [] && $value['city'] != ''){

                  $property->location             = $value['city'];

                }

                if(isset($value['sub_community']) != [] && $value['sub_community'] != ''){

                  $property->sub_location      = $value['sub_community'];

                }
                if(isset($value['community']) != [] && $value['community'] != ''){

                  $property->neighbourhoods    = $value['community'];

                }                

                $property->rating           = '5';

                if(isset($value['sub_community']) != [] && $value['sub_community'] != ''){

                  $property->address              = $value['sub_community'];

                }



                // if($value['PreviewLink'] != [] && $value['PreviewLink'] != ''){

                //     $property->PreviewLink= $value['PreviewLink'];

                // }

                // if($value['company_logo'] != [] && $value['company_logo'] != ''){

                //     $property->company_logo = $value['company_logo']; 

                // }



                // if($value['Virtual_Tour'] != [] && $value['Virtual_Tour'] != ''){

                //     $property->virtual_tour= $value['Virtual_Tour'];

                // }

                // if($value['Threesixty_Tour'] != [] && $value['Threesixty_Tour'] != ''){

                //     $property->threesixty_tour = $value['Threesixty_Tour']; 

                // }



                // if($value['Web_Tour'] != [] && $value['Web_Tour'] != ''){

                //     $property->web_tour= $value['Web_Tour'];

                // }

                // if($value['Audio_Tour'] != [] && $value['Audio_Tour'] != ''){

                //     $property->audio_tour = $value['Audio_Tour']; 

                // }

                


                $property->brochure         = NULL;

                $property->floor_plan       = NULL;

                // 

                $property->property_source      = 'xml';

                //latitude and longnitude

                if(isset($value['geopoints']) !=[] && $value['geopoints'] !='' ){

                    $geoloc = explode(',', $value['geopoints']);
                    $property->address_latitude     = $geoloc[1];
                    $property->address_longitude     = $geoloc[0];

                }

                // if($value['Longitude'] !=[] && $value['Longitude'] !='' ){


                // }

                if(isset($value['title_en'])!=[] && $value['title_en'] !=''){

                    $property->slug                 = isset($value['title_en']) ? $this->createSlug($value['title_en']) : '';

                }
                if(isset($value['developer']) && $value['developer'] !=''){

                    $avalable_dev              = Developer::where('title',$value['developer'])->first();
                    if($avalable_dev){
                        $property->developer   = $avalable_dev->id;
                    }
                    // else{

                    //     $developer             =  new Developer;
                    //     $developer->title      =  $value['developer'];
                    //     $developer->save();
                    //     $property->developer    = $developer->id;

                    // }


                }

                // if($value['furnished'] != []){

                //     $property->furnished            = isset($value['furnished'])?$value['furnished']:'';

                // }

                //Agent Info 

               if(isset($value['agent']) != [] && $value['agent'] != [])

               {

                    // dd($value['agent']['name']);
                    $existsuser = User::where('email',$value['agent']['email'])->first();

                    if($existsuser){

                        $property->agent_id             = $existsuser->id;

                    }
                    
                    // else{

                    //     $user                           =  new User;

                    //     $user->first_name               = isset($value['agent']['name']) ? $value['agent']['name'] :'N/A';

                    //     $user->email                    = isset($value['agent']['email']) ? $value['agent']['email']:'N/A';

                    //     $user->phone                    = isset($value['agent']['phone']) ? $value['agent']['phone'] :'';

                    //     $user->image                    = isset($value['agent']['photo']) ? $value['agent']['photo'] :'';

                    //     $user->license_no               = isset($value['agent']['license_no']) ? $value['agent']['license_no'] :'';

                    //     $user->password                 = Hash::make('123456');

                    //     $user->slug                     = isset($value['agent']['name']) ? $this->createSlug($value['agent']['name']) : '';

                    //     $user->status                   = 'Active';

                    //     $user->save();

                    //     $user->roles()->attach(Role::where('name','agent')->first());

                    //     $property->agent_id             = $user->id;

                    // }

                }



                if(isset($value['community']) != [] && $value['community'] != ''){                   

                    $communities = Communities::where('name',$value['community'])->first();

                    if(!empty($communities)){

                        $property->communities  = $communities->id;

                    }else{

                        $communitiess = new Communities;

                        $communitiess->name =$value['community'];

                        $communitiess->slug = $this->createCommunitySlug($value['community']);

                        $communitiess->is_active = '1';

                        $communitiess->save();

                        $property->communities  = $communitiess->id;                       

                    }

                } 

                // Accommodataion check 

                // if($value['Unit_Type'] != [] && $value['Unit_Type'] != ''){                   

                //     $accommodataion = Accommodataion::where('name',$value['Unit_Type'])->first();

                //     if(empty($accommodataion)){

                //         $accommodataion = new Accommodataion;

                //         $accommodataion->name = $value['Unit_Type'];

                //         $accommodataion->is_active = '1';

                //         $accommodataion->save();                

                //     }

                //     $accommodataion_ids =  $accommodataion->id;

                // } 

                

                // if(isset($value['Facilities'])){

                //     // dd($value['Facilities']['facility']);

                //     $amminity_ids[] ='';

                //     $i = 0;

                //     $count = count($value['Facilities']['facility']);

                //     while ( $i <=  $count) {

                //     if ($i >= $count) { break;}

                //      $amenitiess = Amenity::where('name',$value['Facilities']['facility'][$i])->first();

                //      $amenitiess = $amenitiess ? $amenitiess : new Amenity;

                //      $amenitiess->name = $value['Facilities']['facility'][$i];

                //      $amenitiess->is_active = 1;

                //      $amenitiess->save();



                //      if($amenitiess->id !=''){

                //          $amminity_ids[] =  $amenitiess->id;

                //      }

                //      $i++ ;

                //     }

                //  }

                $property->save();

                if($allraedy){

                    // dd($accommodataion_ids);

                    // echo '<pre>'; print_r($accommodataion_ids);echo '</pre>';

                    $property->accommodataions()->sync($accommodataions_id);

                    // $property->amenities()->sync($amminity_ids);

                }else{

                    // dd($accommodataion_id);

                    $property->accommodataions()->attach($accommodataions_id);

                    // $property->amenities()->attach($amminity_ids);
                }

                //deletes a number on index $idx in array and returns the new array  

                // Save Gallery Image

                if(count($value['photo']['url']) > 0){

                    Imagegallery::where('property_id', $property->id)->delete();                   

                    foreach ($value['photo']['url'] as $keys => $img) {

                        $gallery                =  new Imagegallery;

                        $gallery->property_id   = $property->id;

                        $gallery->galleryimage  = $img;

                        $gallery->save();

                    } 

                }
            

        } 

        $myfile = fopen("newfile.txt", "a");

        fwrite($myfile, '  '.date('Y-m-d H:i:s').' success  ' );

        fclose($myfile);



        echo "Property added successfully.";

    }


}