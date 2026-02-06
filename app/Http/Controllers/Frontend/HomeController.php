<?php
namespace App\Http\Controllers\Frontend;
use Mail;
use App\Models\Status;
use App\Models\User;
use App\Models\Property;
use App\Models\Developer;
use App\Models\Accommodataion;
use App\Models\Amenity;
use App\Models\About;
use App\Models\Service;
use App\Models\VideoCall;
use App\Models\Neighbourhoods;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Communities;
use App\Models\Clienttestimonial;
use App\Models\Imagegallery;
use App\Models\Floorplan;
use App\Models\Category;
use App\Models\PageMetas;
use App\Models\Blog;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use DB;
use Session;
use Redirect;
use App\Models\Setting;
use File;
use ZipArchive;
class HomeController extends Controller {
    public function test(){
        
        $developers = Developer::select('dev_logo')->where('is_active', 1)->orderBy('order_id', 'desc')->get();
        dd( $developers);
        $featureProperties = Property::where('is_active', 1)->where('property_type',1)->where('is_feature', 1)->orderBy('id', 'desc')->limit(8)->get();
        $properties = Property::where('is_active', 1)->where('property_type',1)->orderBy('id', 'desc')->limit(8)->get();
        
         // $properties = Property::where('is_active', 1)->orderBy('id', 'desc')->limit(30)->get(['address','slug','area','bathrooms','bedrooms','title','image','price','is_crm','accommodation','status']);
        $news = Blog::latest()->take(3)->get(['slug','title','image']);
        // $statuses = Status::where('is_active', 1)->get();
        //$communities = Communities::where('is_active',1)->get(['id','name','image','slug']);
        
        $communities = Communities::withCount('CommunityProperty')
                        ->has('CommunityProperty')
                        ->where('is_active',1)
                        ->orderBy('community_property_count', 'desc')
                        ->limit(12)
                        ->get(['id','name','image','slug']);
        
        $accommodataion = Accommodataion::with('properties')->whereIn('id',[3,4,5])->get()->map(function($q) {
            $q->setRelation('properties', $q->properties->where('is_active', 1)->where('property_source', '299-offplan')->take(5));
            return $q;
        });
        
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get(['id','name']);
        $amenities = Amenity::where('is_active', 1)->get(['id','name','icon']);
        $agents = User::whereHas('roles', function($q){
            $q->where('name', 'agent');
        })->where('status','Active')->orderBy('id','desc')->get();
        
        return view('frontend.home1', compact('communities','amenities','news','neighbourhoods','agents','developers','properties','accommodataion', 'featureProperties', 'properties'));
    
                        
    }
    public function home() {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $developers = Developer::select('dev_logo')->where('is_active', 1)->orderBy('order_id', 'desc')->get();
        $featureProperties = Property::where('is_active', 1)->where('property_type',1)->where('is_feature', 1)->orderBy('created_at', 'desc')->limit(8)->get();
        $properties = Property::where('is_active', 1)->where('property_type',2)->orderBy('id', 'desc')->limit(8)->get();
        $searchproperties = Property::where('is_active', 1)->get();
         // $properties = Property::where('is_active', 1)->orderBy('id', 'desc')->limit(30)->get(['address','slug','area','bathrooms','bedrooms','title','image','price','is_crm','accommodation','status']);
        $news = Blog::latest()->take(3)->get(['slug','title','image']);
        // $statuses = Status::where('is_active', 1)->get();
        //$communities = Communities::where('is_active',1)->get(['id','name','image','slug']);
         $testimonials = Clienttestimonial::where('is_active', 1)->orderBy('id', 'desc')->get();
        $communities = Communities::withCount('CommunityProperty')
                        ->has('CommunityProperty')
                        ->where('is_active',1)
                         ->orderBy('community_property_count', 'desc')
                        ->limit(12)
                        ->get(['id','name','image','slug']);
        $accm = Accommodataion::where('is_active', 1)->get();
        $accommodataion = Accommodataion::with('properties')->whereIn('id',[3,4,5])->get()->map(function($q) {
            $q->setRelation('properties', $q->properties->where('is_active', 1)->where('property_source', '299-offplan')->take(5));
            return $q;
        });
        
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get(['id','name']);
        $amenities = Amenity::where('is_active', 1)->get(['id','name','icon']);
        $agents = User::whereHas('roles', function($q){
            $q->where('name', 'agent');
        })->where('status','Active')
        ->orderBy('agent_order','Asc')->get();
        
        
        $generalSettings = Setting::pluck('value','key');
        $xmlString = file_get_contents("https://expert.propertyfinder.ae/feed/profoundre/privatesite/c4844dd5f62c7a190b779966e866b665");
        // $xmlProperties = json_decode(json_encode(simplexml_load_string($xmlString, 'SimpleXMLElement', LIBXML_NOCDATA),true), true);
        
        return view('frontend.home', compact('generalSettings','communities','pagemeta','amenities','news','accm','neighbourhoods','agents','developers','properties','accommodataion', 'featureProperties', 'properties','searchproperties','testimonials'));
    }

     public function home_test() {
        $developers = Developer::where('is_active', 1)->orderBy('order_id', 'desc')->get(['dev_logo','title','id']);
        $properties = Property::where('is_active', 1)->whereIn('accommodation',[3,4,5,6])->orderBy('id', 'desc')->take(50)->get();
        $news = Blog::latest()->take(3)->get(['slug','title','image']);
        $communities = Communities::where('is_active',1)->get(['id','name','image','slug']);
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->pluck('name','id');
        $amenities = Amenity::where('is_active', 1)->get(['id','name','icon']);
        // $properties = Property::get();
        $agents = User::whereHas('roles', function($q){
            $q->where('name', 'agent');
        })->where('status','Active')->orderBy('id','desc')->get();
        // $featuredlistings = Property::Where('is_crm',1)->OrderBy('id', 'desc')->get();
        // dd($featuredlistings);
        return view('frontend.home_test', compact('amenities','news','neighbourhoods','agents','developers', 'communities','properties'));
    }

    public function autocompleteSearch(Request $request)
    {     
         return Property::select('title')
        ->where('title', 'like', "%{$request->term}%")->orWhere("address", "LIKE", "%{$request->term}%")
        ->pluck('title');
         return response()->json($data);
    
    } 
    
    public function videoCall(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();

        return view('video-call', compact('pagemeta'));

    }

    public function thankYou(){
$pagemeta = PageMetas::where('page_url',url()->current())->first();
       
        return view('frontend.thankYou', compact('pagemeta'));
    }
    public function privacyPolicy(){
$pagemeta = PageMetas::where('page_url',url()->current())->first();
       
        return view('frontend.privacyPolicy', compact('pagemeta'));
    }
    public function termsConditions(){
$pagemeta = PageMetas::where('page_url',url()->current())->first();
       
        return view('frontend.termsConditions', compact('pagemeta'));
    }
    public function thanks(){
$pagemeta = PageMetas::where('page_url',url()->current())->first();
       
        return view('frontend.thanks', compact('pagemeta'));
    }
    
    public function agentVideoCall(Request $request) {

            $messages = [

                'full_name.required' => 'Name field is required.',

                'email.required' => 'Email field is required.',

                'question.required' => 'Question field is required.'

            ];

            $validator = Validator::make($request->all(), [

                'full_name' => 'required',

                'email' => 'required',

                'question' => 'required'

            ]);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);            

            } 

           
            // $myemail = array('info@profoundrealtors.com');
            // $name = $request->full_name;
            // Mail::send('mail.schedule-videocall', array('full_name' => $request->full_name,'email' => $request->email ,'ths_date' => $request->ths_date ,'ths_time' => $request->ths_time,
            //     'question'=>$request->question), function($message) use($myemail,$name){
            //     $message->to($myemail, $name)->subject('Scheduled VideoCall meeting');
            // });


            $videoCall              = new VideoCall();

            // $videoCall->agent_id    = isset($request->id) ? $request->id : '';

            $videoCall->date        = $request->ths_date;

            $videoCall->time        = $request->ths_time;

            $videoCall->name        = $request->full_name;

            $videoCall->email       = $request->email;

            $videoCall->question    = $request->question;

            $videoCall->page_url    = url()->previous();

            $videoCall->save();


            $details = [

                'date'      =>  $request->ths_date,

                'time'     =>  $request->ths_time,

                'name'   =>  $request->full_name,

                'email'     =>  $request->email,

                'question'      =>  $request->question,

            ];

            
            if($videoCall){

                // return response()->json([

                //     'success'   => true,

                //     'message'   =>'Thank you for filling out your information!'

                // ]);
                return redirect(url('thank-you'));


            }else{

                return response()->json([

                    'success' => false,

                    'message'   =>'Failed, try again'

                ],401);

            }


            // $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjuvilp/'; //sent url
            // $headers_curl  = [
            //                 'Content-Type: application/json'
            //         ];
                                                            
            // $ch = curl_init();
            // curl_setopt($ch, CURLOPT_URL, $url);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($details));           
            // curl_setopt($ch, CURLOPT_HTTPHEADER, $headers_curl);
            // $result = curl_exec($ch);
            // curl_close($ch);

            // $response = json_decode($result);
            


            // return response()->json([

            //     'success'       => true,

            //     'data'          => [],

            //     'message'       => 'Record has been created.',

            //     'reload'        => true

            // ]);

        
    }
    
    public function listYourProperty(Request $request){
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        $agents = User::whereHas('roles', function($q){
            $q->where('name', 'agent');
        })->orderBy('agent_order','Asc')->get();
        return view('frontend.list-your-property', compact('communities','pagemeta','news','agents','accommodataion','amenities','statuses','neighbourhoods'));
    }
    
    public function propertyWorth(Request $request){
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        $agents = User::whereHas('roles', function($q){
            $q->where('name', 'agent');
        })->orderBy('agent_order','Asc')->get();
        return view('frontend.property-worth', compact('communities','pagemeta','news','agents','accommodataion','amenities','statuses','neighbourhoods'));
    }
    
    public function listPropertyForm(Request $request) {
        
         $messages = [
            'name'=>'Name is Required',
            'email'=>'Email is Required',
            'phone'=>'Phone is Required',
            'sell_type'=>'Sell type is Required',
            'property_type'=>'Property type is Required',
            'location'=>'Location is Required',
        ];
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'sell_type'=>'required',
            'property_type'=>'required',
            'location'=>'required',
          ],$messages);
          
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        
        $details = [
            'name'          => $request->name,
            'email'         => $request->email,
            'phone'         => $request->phone,
            'message'       => $request->message,
            'sell_type'     => $request->sell_type,
            'property_type' => $request->property_type,
            'location'      => $request->location,
            'form_type'     => 'list your property',
            'id_address'    => request()->ip(),
            'page_url'          => url()->previous(),
        ];
        
        
        // $email = 1;
        /* Send email start */
        $email = $request->email;
        $name = $request->name;
        $message = 'This email sent form Profound';
        Mail::send('frontend.emails.listPropertyMail', array('data' => $details), function($message) use($email,$name) {
                $message->to('listings@profoundrealtors.com', $name)->subject('List your property mail');
                // $message->to('ersan.saini.gmail.com', $name)->subject('Contact User Mail');
        });
        
        
        /* Send email end */

        $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjupsh0/'; //sent url
        $headers_curl  = [
                        'Content-Type: application/json'
                ];
                                                        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($details));           
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers_curl);
        $result = curl_exec($ch);
        curl_close($ch);

        $response = json_decode($result);

return redirect(url('thank-you'));
        
        //return view('frontend.floorPlans', compact('floorplan', 'category','news'));
        
        /*$url = 'https://hooks.zapier.com/hooks/catch/3658724/bg9lbgt/';
        $headers_curl  = [
			              'Content-Type: application/json'
			            ];
					            
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));           
	    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers_curl);
        $result = curl_exec($ch);
        curl_close($ch);
        
        $response = json_decode($result);
        if($response->status=='success'){
            return redirect(route('thank-you'));
        }*/
         
            
    }
    
    
    public function floorPlans(Request $request) {
        $keyword = $request->search;
        $collection = Floorplan::select('*');
        if ($request->filled('search')) {
            $collection->where('title', 'like', "%$keyword%");
        }
        $floorplan = $collection->get()->toArray();;
        $category = array_column($floorplan, 'category');
        $collection = Category::select('*');
        if (isset($category)) {
            $collection->whereIn('id', $category);
        }
        $category = $collection->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.floorPlans', compact('floorplan', 'category','news'));
    }
    public function floorPlansDetails(Request $request, $slug = '') {
        $news = Blog::latest()->take(3)->get();
        $communities = Communities::all();
        $floorplansdetails = Floorplan::where('is_active', 1)->where('slug', '=', $slug)->first();
        return view('frontend.floorplansdetails', compact('floorplansdetails','news','communities'));
    }
    public function aboutUs(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $about = About::first();
        $communities = Communities::all();
        $developers = Developer::select('dev_logo')->where('is_active', 1)->orderBy('order_id', 'desc')->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        $agents = User::whereHas('roles', function($q){
            $q->where('name', 'agent');
        })->where('status','Active')->orderBy('agent_order','Asc')->get();
        return view('frontend.about-us', compact('communities','about','pagemeta','news','agents','accommodataion','amenities','statuses','neighbourhoods','developers'));
    }
    
    public function mortgageCalculator(Request $request)
    {     
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        // $communities = Communities::all();
        // $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        // return view('frontend.mortgage-calculator', compact('communities','news','accommodataion','amenities','statuses','neighbourhoods'));
        return view('frontend.mortgage', compact('amenities','pagemeta','statuses','neighbourhoods'));
    
    }
    public function mortgage(Request $request)
    {     
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        // $communities = Communities::all();
        // $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        // return view('frontend.mortgage-calculator', compact('communities','news','accommodataion','amenities','statuses','neighbourhoods'));
        return view('frontend.mortgage', compact('amenities','pagemeta','statuses','neighbourhoods'));
    
    }
    
    public function career(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        $agents = User::whereHas('roles', function($q){
            $q->where('name', 'agent');
        })->orderBy('agent_order','Asc')->get();
        return view('frontend.career', compact('communities','pagemeta','news','agents','accommodataion','amenities','statuses','neighbourhoods'));
    }
    
    public function contactUs(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $communities = Communities::all();
        $news = Blog::latest()->take(3)->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
         $developers = Developer::select('dev_logo')->where('is_active', 1)->orderBy('order_id', 'desc')->get();
        $agents = User::whereHas(
                'roles', function($q){
                    $q->where('name', 'agent');
                })->latest()->limit(3)->get();
        return view('frontend.contact-us', compact('communities','pagemeta','news','accommodataion','amenities','statuses','neighbourhoods','agents','developers'));
    }
    public function investInDubai(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function bestpropertyinvestmentopportunitiesindubai(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.best-property-investment-opportunities-in-dubai',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyLuxuryVillasInDubai(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-luxury-villas-in-dubai',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyApartmentsinDubai(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-apartments-in-dubai',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyPropertiesinDubaiMarina(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-dubai-marina',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyPropertiesinBusinessBay(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-business-bay',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyPropertiesinDowntownDubai(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-downtown-dubai',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyPropertiesinDubaiCreekHarbour(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-dubai-creek-harbour',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyPropertiesinPalmJumeirah(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-palm-jumeirah',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyPropertiesindubaiLand(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-dubai-land',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyPropertiesinDamacHillsDubai(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-damac-hills-dubai',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyPropertiesinNshama(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-nshama',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyTownhousesinDubai(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-townhouses-in-dubai',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyJumeirahVillageCircle(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-jumeirah-village-circle',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function buyPropertiesInJbr(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-jbr',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function BuyPropertiesinArabianRanches(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-arabian-ranches',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function BuyPropertiesinAlFujan(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-al-furjan',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function BuyPropertiesinAlWasl(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-al-wasl',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function BuyPropertiesinDCHTheLagoons(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-dch-the-lagoons',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function BuyPropertiesinDubaiHillsEstate(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-dubai-hills-estate',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function BuyPropertiesinCultureVillage(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-culture-village',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function BuyPropertiesinBlueWatersIsland(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-blue-water-island',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function BuyPropertiesinDIFC(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.buy-properties-in-difc',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinDubaiMarina(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-dubai-marina',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinBusinessBay(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-business-bay',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinDowntownDubai(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-downtown-dubai',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinJVC(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-jvc',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinPalmJumeirah(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-palm-jumeirah',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinJBR(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-jbr',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinArabinanRanches(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-arabian-ranches',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinDubaiCreekHarbour(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-dubai-creek-harbour',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinAlFujan(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-al-furjan',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinAlWasl(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-al-wasl',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinDCHTheLagoons(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-dch-the-lagoons',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinDubaiHillsEstate(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-dubai-hills-estate',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinCultureVillage(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-culture-village',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinBlueWatersIsland(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-blue-waters-island',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinDIFC(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-Rent-in-difc',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function PropertyforRentinDubaiLand(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.property-for-rent-in-dubailand',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function investinDubaiFromOman(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai-from-oman',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function investinDubaiFromPak(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai-from-pakistan',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function investinDubaiFromEgypt(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai-from-egypt',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function investinDubaiFromFrance(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai-from-france',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function investinDubaiFromIndia(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai-from-india',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function investinDubaiFromQatar(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai-from-qatar',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function investinDubaiFromRussia(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai-from-russia',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function investinDubaiFromUk(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai-from-uk',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function investinDubaiFromUsa(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.invest-in-dubai-from-usa',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    
    public function profoundVideos(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.profound-videos',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities'));
    }
    public function geneva(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        $featureProperties = Property::where('is_active', 1)->where('property_type',1)->where('is_feature', 1)->orderBy('id', 'desc')->limit(8)->get();
         // Step 2: Fetch exchange rate from AED to EUR
        //  $response = Http::get('https://v6.exchangerate-api.com/v6/9d0afcfda22389634c0e70a1/latest/AED');
        //  $exchangeRate = $response['conversion_rates']['EUR'];
        return view('frontend.geneva',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities','featureProperties'));
    }
    public function uk(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        $agents = User::whereIn('first_name', ['Zulkernain Rusu', 'Mohamad Wazir'])
    ->where('status', 'Inactive')
    ->orderBy('agent_order', 'Asc')
    ->get();
        $featureProperties = Property::where('is_active', 1)->where('property_type',1)->where('is_feature', 1)->orderBy('id', 'desc')->limit(8)->get();
         // Step 2: Fetch exchange rate from AED to EUR
        //  $response = Http::get('https://v6.exchangerate-api.com/v6/9d0afcfda22389634c0e70a1/latest/AED');
        //  $exchangeRate = $response['conversion_rates']['EUR'];
        return view('frontend.uk',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities','featureProperties','agents'));
    }
    // public function naveed(Request $request) {
    //     $pagemeta = PageMetas::where('page_url',url()->current())->first();
    //     $statuses = Status::where('is_active', 1)->get();
    //     $communities = Communities::all();
    //     $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
    //     $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
    //     $amenities = Amenity::where('is_active', 1)->get();
    //     $news = Blog::latest()->take(3)->get();
    //     $featureProperties = Property::where('is_active', 1)->where('property_type',1)->where('is_feature', 1)->orderBy('id', 'desc')->limit(8)->get();
    //     return view('frontend.naveed',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities','featureProperties'));
    // }
    public function developers(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $developers = Developer::all();
        return view('frontend.developers', compact('developers','pagemeta'));
    }
    
    public function agents(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        // $agents = User::paginate(12);
         $agents = User::whereHas('roles', function($q){
            $q->where('name', 'agent');
      })->orderBy('agent_order','Asc')->paginate(15);
        return view('frontend.agents', compact('agents','pagemeta'));
    }
    
    public function singleAgent($slug) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $agent = User::where('slug', $slug)->first();
        //dd($agent);
        return view('frontend.singleagent', compact('agent','pagemeta'));
    }
    
    public function singleDeveloper($slug) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $developer = Developer::where('slug', $slug)->first();
        return view('frontend.singleDeveloper', compact('developer','pagemeta'));
    }
    public function careers(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        return view('frontend.careers', compact('pagemeta'));
    }
    public function offPlans(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statusdata = $request->status;
        $bedrooms = $request->bedroom;
        //$bathrooms = $request->bathrooms;
        $accommodation = $request->accommodation;
        $neighbourhood = $request->neighbourhood;
$accm = Accommodataion::where('is_active', 1)->get();
        $collection = Accommodataion::query();
        $collection->with(['properties' => function($query){
           
            if(!empty(request()->accommodation)) {
                $query->whereHas('accommodataions', function ($q) {
                    $q->whereIn('accommodataion_id', request()->accommodation);
                });
            }
            if(!empty(request()->neighbourhood)){
               
                $query->whereHas('neighbourhoodss', function ($q) {
                    $q->whereIn('neighbourhoods_id', request()->neighbourhood);
                });
            }
            
            if(isset(request()->status_id) || isset(request()->rent_status) || isset(request()->completion_status)){
                $status_ids = array(request()->status_id,request()->rent_status,request()->completion_status);
                $query->whereIn('status', $status_ids);
            }
            
            if(!empty(request()->bedroom)){
                $query->whereHas('propertyBedrooms', function ($q) {
                    $q->whereIn('bedroom_id', request()->bedroom);
                });
            }

            if(!empty(request()->title)){
               
                $query->where('title', request()->title);
                
            }

            if( isset(request()->maxprice)) {
             
                    if(empty(request()->minprice)){
                        request()->minprice = 0;
                    }
                    if(empty(request()->maxprice)){
                        request()->maxprice = 0;
                    }
                    $query->where('price', '>=',request()->minprice);
                    $query->where('price', '<=',request()->maxprice);
            }
            if(!empty(request()->amenities)){
                $query->whereHas('amenities', function ($q) {
                    $q->whereIn('amenity_id', request()->amenities);
                });
            }
            
            
            if (isset(request()->min_area)) {
                $query->where('area', '>=', request()->min_area);
            }
            if (isset(request()->max_area)) {
                $query->where('area', '<=', request()->max_area);
            }
            
            if (isset(request()->furnished)) {
                $query->where('furnished', request()->furnished);
            } 
            
            if (isset(request()->parking)) {
                $query->where('parking_space',  request()->parking);
            }
            if (isset(request()->community)) {
                $query->whereIn('communities', request()->community);
            }
            if (isset(request()->developers)) {
                $query->whereIn('developer', request()->developers);
            }
            if (isset(request()->status_ids)) {
                $query->whereIn('status', request()->status_ids);
            }
            
             $query->where('property_status', 2);
              
        }])->withCount(['properties' => function($query){
            
            if(!empty(request()->accommodation)) {
                $query->whereHas('accommodataions', function ($q) {
                    $q->whereIn('accommodataion_id', request()->accommodation);
                });
            }
            if(!empty(request()->neighbourhood)){
               
                $query->whereHas('neighbourhoodss', function ($q) {
                    $q->whereIn('neighbourhoods_id', request()->neighbourhood);
                });
            }
            if(isset(request()->status_id) || isset(request()->rent_status) || isset(request()->completion_status)){
                $status_ids = array(request()->status_id,request()->rent_status,request()->completion_status);
                $query->whereIn('status', $status_ids);
            }

            if(!empty(request()->bedroom)){
                $query->whereHas('propertyBedrooms', function ($q) {
                    $q->whereIn('bedroom_id', request()->bedroom);
                });
            }

            if(!empty(request()->title)){
                $query->where('title', request()->title);
            }

            if( isset(request()->maxprice)) {
             
                    if(empty(request()->minprice)){
                        request()->minprice = 0;
                    }
                    if(empty(request()->maxprice)){
                        request()->maxprice = 0;
                    }
                    $query->where('price', '>=',request()->minprice);
                    $query->where('price', '<=',request()->maxprice);
            }
            if(!empty(request()->amenities)){
                $query->whereHas('amenities', function ($q) {
                    $q->whereIn('amenity_id', request()->amenities);
                });
            }
            
            
            if (isset(request()->min_area)) {
                $query->where('area', '>=', request()->min_area);
            }
            if (isset(request()->max_area)) {
                $query->where('area', '<=', request()->max_area);
            }
            
            if (isset(request()->furnished)) {
                $query->where('furnished', request()->furnished);
            } 
            
            if (isset(request()->parking)) {
                $query->where('parking_space',  request()->parking);
            }
            if (isset(request()->community)) {
                $query->whereIn('communities', request()->community);
            }
            if (isset(request()->developers)) {
                $query->whereIn('developer', request()->developers);
            }
            if (isset(request()->status_ids)) {
                $query->whereIn('status', request()->status_ids);
            }
             $query->where('property_status', 2);
        }]);
        $properties = $collection->orderBy('id', 'ASC')->where('is_active', 1)->get();
       
       $searchproperties = Property::where('is_active', 1)->get();
       
        $statuses = Status::where('is_active', 1)->orderBy('id', 'DESC')->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        // $amenities = Amenity::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get(['id','name','icon']);
        $communities = Communities::where('is_active', 1)->latest()->take(14)->get();
        // $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get(['id','name']);
        $news = Blog::latest()->take(3)->get();
        return view('frontend.offPlans', compact('properties','news','pagemeta','accommodataion','statuses','amenities','communities','neighbourhoods','accm','searchproperties'));
    }

    public function featuredListings(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statusdata = $request->status;
        $bedrooms = $request->bedroom;
        //$bathrooms = $request->bathrooms;
        $accommodation = $request->accommodation;
        $neighbourhood = $request->neighbourhood;
        // echo '<pre>';print_r($neighbourhood);'</pre>';
        $query = Property::query();
        // $collection->with(['properties' => function($query){
            //$query->where('title', 'like', '%'.request()->search.'%');
            /*if(isset(request()->accommodation)){
                //dd(request()->accommodation);
                $query->whereIn('accommodataion_id', request()->accommodation);
            }*/
            
            if(!empty(request()->accommodation)) {
                $query->whereHas('accommodataions', function ($q) {
                    $q->whereIn('accommodataion_id', request()->accommodation);
                });
            }
            if(!empty(request()->neighbourhood)){
                // dd(request()->neighbourhood);
                $query->whereHas('neighbourhoodss', function ($q) {
                    $q->whereIn('neighbourhoods_id', request()->neighbourhood);
                });
            }
            if(isset(request()->status_id) || isset(request()->rent_status) || isset(request()->completion_status)){
                $status_ids = array(request()->status_id,request()->rent_status,request()->completion_status);
                $query->whereIn('status', $status_ids);
            }
            // if(isset(request()->status)){
            //     $query->where('status',request()->status);
            // }
            // if (!empty(request()->bedroom)) {
            //     //dd(request()->bedroom);
            //     $query->whereIn('bedrooms', request()->bedroom);
            // }
            if(!empty(request()->bedroom)){
                $query->whereHas('propertyBedrooms', function ($q) {
                    $q->whereIn('bedroom_id', request()->bedroom);
                });
            }
            if(isset(request()->minprice) || isset(request()->maxprice)) {
             
                    if(empty(request()->minprice)){
                        request()->minprice = 0;
                    }
                    if(empty(request()->maxprice)){
                        request()->maxprice = 0;
                    }
                    $query->where('price', '>=',request()->minprice);
                    $query->where('price', '<=',request()->maxprice);
            }
            if(!empty(request()->amenities)){
                $query->whereHas('amenities', function ($q) {
                    $q->whereIn('amenity_id', request()->amenities);
                });
            }
            
            
            if (isset(request()->min_area)) {
                $query->where('area', '>=', request()->min_area);
            }
            if (isset(request()->max_area)) {
                $query->where('area', '<=', request()->max_area);
            }
            
            if (isset(request()->furnished)) {
                $query->where('furnished', request()->furnished);
            } 
            
            if (isset(request()->parking)) {
                $query->where('parking_space',  request()->parking);
            }
            if (isset(request()->community)) {
                $query->whereIn('communities', request()->community);
            }
            if (isset(request()->developers)) {
                $query->whereIn('developer', request()->developers);
            }
            if (isset(request()->status_ids)) {
                $query->whereIn('status', request()->status_ids);
            }
            $featuredproperties = $query->orderBy('id', 'desc')->where('is_active',1)->where('is_crm',1)->paginate(12);
        // }]);
        // $properties = $collection->orderBy('name', 'ASC')->where('is_active', 1)->get();
        $properties = Property::where('is_active',1)->where('is_feature', 1)->paginate(12);
        $statuses = Status::where('is_active', 1)->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $communities = Communities::where('is_active', 1)->latest()->take(14)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.featured-listings', compact('properties','pagemeta','news','accommodataion','statuses','amenities','communities','neighbourhoods','featuredproperties'));
    }

    public function allProperties(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        
        $statusdata = $request->status;
        $bedrooms = $request->bedroom;
        //$bathrooms = $request->bathrooms;
        $accommodation = $request->accommodation;
        $neighbourhood = $request->neighbourhood;
        // echo '<pre>';print_r($neighbourhood);'</pre>';
        $query = Property::query();
        // $collection->with(['properties' => function($query){
            //$query->where('title', 'like', '%'.request()->search.'%');
            /*if(isset(request()->accommodation)){
                //dd(request()->accommodation);
                $query->whereIn('accommodataion_id', request()->accommodation);
            }*/
            
            if(!empty(request()->accommodation)) {
                $query->whereHas('accommodataions', function ($q) {
                    $q->whereIn('accommodataion_id', request()->accommodation);
                });
            }
            if(!empty(request()->neighbourhood)){
                // dd(request()->neighbourhood);
                $query->whereHas('neighbourhoodss', function ($q) {
                    $q->whereIn('neighbourhoods_id', request()->neighbourhood);
                });
            }
            if(isset(request()->status_id) || isset(request()->rent_status) || isset(request()->completion_status)){
                $status_ids = array(request()->status_id,request()->rent_status,request()->completion_status);
                $query->whereIn('status', $status_ids);
            }
            // if(isset(request()->status)){
            //     $query->where('status',request()->status);
            // }
            // if (!empty(request()->bedroom)) {
            //     //dd(request()->bedroom);
            //     $query->whereIn('bedrooms', request()->bedroom);
            // }
            if(!empty(request()->bedroom)){
                $query->whereHas('propertyBedrooms', function ($q) {
                    $q->whereIn('bedroom_id', request()->bedroom);
                });
            }
            if(isset(request()->minprice) || isset(request()->maxprice)) {
             
                    if(empty(request()->minprice)){
                        request()->minprice = 0;
                    }
                    if(empty(request()->maxprice)){
                        request()->maxprice = 0;
                    }
                    $query->where('price', '>=',request()->minprice);
                    $query->where('price', '<=',request()->maxprice);
            }
            if(!empty(request()->amenities)){
                $query->whereHas('amenities', function ($q) {
                    $q->whereIn('amenity_id', request()->amenities);
                });
            }
            
            
            if (isset(request()->min_area)) {
                $query->where('area', '>=', request()->min_area);
            }
            if (isset(request()->max_area)) {
                $query->where('area', '<=', request()->max_area);
            }
            
            if (isset(request()->furnished)) {
                $query->where('furnished', request()->furnished);
            } 
            
            if (isset(request()->parking)) {
                $query->where('parking_space',  request()->parking);
            }
            if (isset(request()->community)) {
                $query->whereIn('communities', request()->community);
            }
            if (isset(request()->developers)) {
                $query->whereIn('developer', request()->developers);
            }
            if (isset(request()->status_ids)) {
                $query->whereIn('status', request()->status_ids);
            }
            $featuredproperties = $query->orderBy('title', 'ASC')->where('is_active',1)->paginate(12);
        // }]);
        // $properties = $collection->orderBy('name', 'ASC')->where('is_active', 1)->get();
        $properties = Property::where('is_active',1)->paginate(12);
        $statuses = Status::where('is_active', 1)->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $communities = Communities::where('is_active', 1)->latest()->take(14)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.all-properties', compact('properties','pagemeta','news','accommodataion','statuses','amenities','communities','neighbourhoods','featuredproperties'));
    }

    public function services(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $service = Service::first();
       
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $testimonials = Clienttestimonial::where('is_active', 1)->orderBy('id', 'desc')->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.services', compact('communities','service','pagemeta','accommodataion','amenities','news','statuses','neighbourhoods','testimonials'));
    }
    
    //ajaxlisting
    public function listing(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statusdata = $request->status;
        $bedrooms = $request->bedroom;
        //$bathrooms = $request->bathrooms;
        $accommodation = $request->accommodation;
        $neighbourhood = $request->neighbourhood;
        $communitieslists = $request->communitieslists;
        $searchproperties = Property::where('is_active', 1)->get();
        $accm = Accommodataion::where('is_active', 1)->get();
        
        $collection = Property::select('*');
        if(isset($request->status)){
            $collection->where('status',$request->status);
        }
        
        if (isset($request->bedroom)) {
            $collection->where('bedrooms', $request->bedroom);
        }
        
        if (isset($request->minprice) || isset($request->maxprice)) {
             
                if(empty($request->minprice)){
                    $request->minprice = 0;
                }
                if(empty($request->maxprice)){
                    $request->maxprice = 0;
                }
                $collection->where('price', '>=',$request->minprice);
                $collection->where('price', '<=',$request->maxprice);
        }
        
        
        
        /*if ($request->filled('bathrooms') && !empty($bathrooms) ) {
            $collection->where('bathrooms', $bathrooms);
        }*/
        
        if(isset($request->accommodation)){
            $collection->whereHas('accommodataions', function ($q) {
                $q->where('accommodataion_id', request()->accommodation);
            });
        }
        
        if(isset($request->amenities)){
            $collection->whereHas('amenities', function ($q) {
                $q->where('amenity_id', request()->amenities);
            });
        }
        
        if ($request->filled('neighbourhood')){
            //dd($request->neighbourhood);
            $collection->whereHas('neighbourhoodss', function ($q) {
                $q->where('neighbourhoods_id', request()->neighbourhood);
            });
        }
        
        if ($request->filled('area')) {
            $collection->where('area', '>=', $request->area);
                //$collection->where('area', '<=', $max_areavalue);
        }
        
        if ($request->filled('furnished')) {
            $collection->where('furnished', $request->furnished);
        } 
        
        if ($request->filled('parking')) {
            $collection->where('parking_space',  $request->parking);
        }
        if ($request->filled('community')) {
            $collection->whereIn('communities', $request->community);
        }
        
        if ($request->filled('communitieslists')) {
            $communities_ids = Communities::whereIn('slug',$communitieslists)->pluck('id');
            //dd($communities_ids);
            $collection->whereIn('communities', $communities_ids);
        }
        
        
        $collection->orderBy('id', 'desc')->where('is_active',1)->where('property_source', '299-offplan');
        $properties = $collection->paginate(8);
        //dd($properties);
        $html = view('frontend.ajax_propertylist', compact('properties'))->render();
        $statuses = Status::where('is_active', 1)->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $communities = Communities::where('is_active', 1)->latest()->take(14)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $communitieslist = Communities::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.listing', compact('accommodataion','pagemeta','news','communitieslist','properties','html','amenities','communities','statuses','neighbourhoods','searchproperties','accm'));
    }
    
    public function sell(Request $request) {
        return view('frontend.sell');
    }
    public function rent(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
       $statusdata = $request->status;
        $bedrooms = $request->bedroom;
        //$bathrooms = $request->bathrooms;
        $accommodation = $request->accommodation;
        $neighbourhood = $request->neighbourhood;
        $accm = Accommodataion::where('is_active', 1)->get();
        
        $collection = Accommodataion::query();
        $collection->with(['properties' => function($query){
            //$query->where('title', 'like', '%'.request()->search.'%');
            /*if(isset(request()->accommodation)){
                //dd(request()->accommodation);
                $query->whereIn('accommodataion_id', request()->accommodation);
            }*/
            
            if(!empty(request()->accommodation)) {
                $query->whereHas('accommodataions', function ($q) {
                    $q->whereIn('accommodataion_id', request()->accommodation);
                });
            }
            if(!empty(request()->neighbourhood)){
                // dd(request()->neighbourhood);
                $query->whereHas('neighbourhoodss', function ($q) {
                    $q->whereIn('neighbourhoods_id', request()->neighbourhood);
                });
            }
            if(isset(request()->status_id) || isset(request()->rent_status) || isset(request()->completion_status)){
                $status_ids = array(request()->status_id,request()->rent_status,request()->completion_status);
                $query->whereIn('status', $status_ids);
            }
            // if(isset(request()->status)){
            //     $query->where('status',request()->status);
            // }
            if(!empty(request()->bedroom)){
                $query->whereHas('propertyBedrooms', function ($q) {
                    $q->whereIn('bedroom_id', request()->bedroom);
                });
            }

            if(!empty(request()->title)){
                $query->where('title', request()->title);
            }
            // if (!empty(request()->bedroom)) {
            //     //dd(request()->bedroom);
            //     // $query->whereIn('bedrooms', request()->bedroom);

            // }
            if( isset(request()->maxprice)) {
             
                    if(empty(request()->minprice)){
                        request()->minprice = 0;
                    }
                    if(empty(request()->maxprice)){
                        request()->maxprice = 0;
                    }
                    $query->where('price', '>=',request()->minprice);
                    $query->where('price', '<=',request()->maxprice);
            }
            if(!empty(request()->amenities)){
                $query->whereHas('amenities', function ($q) {
                    $q->whereIn('amenity_id', request()->amenities);
                });
            }
            
            
            if (isset(request()->min_area)) {
                $query->where('area', '>=', request()->min_area);
            }
            if (isset(request()->max_area)) {
                $query->where('area', '<=', request()->max_area);
            }
            
            if (isset(request()->furnished)) {
                $query->where('furnished', request()->furnished);
            } 
            
            if (isset(request()->parking)) {
                $query->where('parking_space',  request()->parking);
            }
            if (isset(request()->community)) {
                $query->whereIn('communities', request()->community);
            }
            if (isset(request()->developers)) {
                $query->whereIn('developer', request()->developers);
            }
            if (isset(request()->status_ids)) {
                $query->whereIn('status', request()->status_ids);
            }
             $query->where('status', 1);
        }])->withCount(['properties' => function($query){
            //$query->where('title', 'like', '%'.request()->search.'%');
            /*if(isset(request()->accommodation)){
                //dd(request()->accommodation);
                $query->whereIn('accommodataion_id', request()->accommodation);
            }*/
            
            if(!empty(request()->accommodation)) {
                $query->whereHas('accommodataions', function ($q) {
                    $q->whereIn('accommodataion_id', request()->accommodation);
                });
            }
            if(!empty(request()->neighbourhood)){
                // dd(request()->neighbourhood);
                $query->whereHas('neighbourhoodss', function ($q) {
                    $q->whereIn('neighbourhoods_id', request()->neighbourhood);
                });
            }
            if(isset(request()->status_id) || isset(request()->rent_status) || isset(request()->completion_status)){
                $status_ids = array(request()->status_id,request()->rent_status,request()->completion_status);
                $query->whereIn('status', $status_ids);
            }
            // if(isset(request()->status)){
            //     $query->where('status',request()->status);
            // }
            if(!empty(request()->bedroom)){
                $query->whereHas('propertyBedrooms', function ($q) {
                    $q->whereIn('bedroom_id', request()->bedroom);
                });
            }

            if(!empty(request()->title)){
                $query->where('title', request()->title);
            }
            // if (!empty(request()->bedroom)) {
            //     //dd(request()->bedroom);
            //     // $query->whereIn('bedrooms', request()->bedroom);

            // }
            if( isset(request()->maxprice)) {
             
                    if(empty(request()->minprice)){
                        request()->minprice = 0;
                    }
                    if(empty(request()->maxprice)){
                        request()->maxprice = 0;
                    }
                    $query->where('price', '>=',request()->minprice);
                    $query->where('price', '<=',request()->maxprice);
            }
            if(!empty(request()->amenities)){
                $query->whereHas('amenities', function ($q) {
                    $q->whereIn('amenity_id', request()->amenities);
                });
            }
            
            
            if (isset(request()->min_area)) {
                $query->where('area', '>=', request()->min_area);
            }
            if (isset(request()->max_area)) {
                $query->where('area', '<=', request()->max_area);
            }
            
            if (isset(request()->furnished)) {
                $query->where('furnished', request()->furnished);
            } 
            
            if (isset(request()->parking)) {
                $query->where('parking_space',  request()->parking);
            }
            if (isset(request()->community)) {
                $query->whereIn('communities', request()->community);
            }
            if (isset(request()->developers)) {
                $query->whereIn('developer', request()->developers);
            }
            if (isset(request()->status_ids)) {
                $query->whereIn('status', request()->status_ids);
            }
             $query->where('status', 1);
        }]);
        $properties = $collection->orderBy('order', 'ASC')->where('is_active', 1)->get();
       
       

       
        $statuses = Status::where('is_active', 1)->orderBy('id', 'DESC')->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        // $amenities = Amenity::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get(['id','name','icon']);
        $communities = Communities::where('is_active', 1)->latest()->take(14)->get();
        // $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get(['id','name']);
        $news = Blog::latest()->take(3)->get();
        $searchproperties = Property::where('is_active', 1)->get();
        return view('frontend.rent', compact('properties','news','pagemeta','accommodataion','statuses','amenities','communities','neighbourhoods','accm','searchproperties'));
    }
    public function ready(Request $request) {
$pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statusdata = $request->status;
        $bedrooms = $request->bedroom;
        //$bathrooms = $request->bathrooms;
        $accommodation = $request->accommodation;
        $neighbourhood = $request->neighbourhood;
        $collection = Accommodataion::query();
        $accm = Accommodataion::where('is_active', 1)->get();
        $collection->with(['properties' => function($query){
            
            if(!empty(request()->accommodation)) {
                $query->whereHas('accommodataions', function ($q) {
                    $q->whereIn('accommodataion_id', request()->accommodation);
                });
            }
            if(!empty(request()->neighbourhood)){
                // dd(request()->neighbourhood);
                $query->whereHas('neighbourhoodss', function ($q) {
                    $q->whereIn('neighbourhoods_id', request()->neighbourhood);
                });
            }
            if(isset(request()->status_id) || isset(request()->rent_status) || isset(request()->completion_status)){
                $status_ids = array(request()->status_id,request()->rent_status,request()->completion_status);
                // $query->whereIn('status', $status_ids);
            }
       
            if (!empty(request()->bedroom)) {
                //dd(request()->bedroom);
                $query->whereIn('bedrooms', request()->bedroom);
            }
            if(isset(request()->minprice) || isset(request()->maxprice)) {
             
                    if(empty(request()->minprice)){
                        request()->minprice = 0;
                    }
                    if(empty(request()->maxprice)){
                        request()->maxprice = 0;
                    }
                    $query->where('price', '>=',request()->minprice);
                    $query->where('price', '<=',request()->maxprice);
            }
            if(!empty(request()->amenities)){
                $query->whereHas('amenities', function ($q) {
                    $q->whereIn('amenity_id', request()->amenities);
                });
            }
            
            
            if (isset(request()->min_area)) {
                $query->where('area', '>=', request()->min_area);
            }
            if (isset(request()->max_area)) {
                $query->where('area', '<=', request()->max_area);
            }
            
            if (isset(request()->furnished)) {
                $query->where('furnished', request()->furnished);
            } 
            
            if (isset(request()->parking)) {
                $query->where('parking_space',  request()->parking);
            }
            if (isset(request()->community)) {
                $query->whereIn('communities', request()->community);
            }
            $query->where('property_status', 6);
        }])->withCount(['properties' => function($query){
            
            if(!empty(request()->accommodation)) {
                $query->whereHas('accommodataions', function ($q) {
                    $q->whereIn('accommodataion_id', request()->accommodation);
                });
            }
            if(!empty(request()->neighbourhood)){
                // dd(request()->neighbourhood);
                $query->whereHas('neighbourhoodss', function ($q) {
                    $q->whereIn('neighbourhoods_id', request()->neighbourhood);
                });
            }
            if(isset(request()->status_id) || isset(request()->rent_status) || isset(request()->completion_status)){
                $status_ids = array(request()->status_id,request()->rent_status,request()->completion_status);
                // $query->whereIn('status', $status_ids);
            }
       
            if (!empty(request()->bedroom)) {
                //dd(request()->bedroom);
                $query->whereIn('bedrooms', request()->bedroom);
            }
            if(isset(request()->minprice) || isset(request()->maxprice)) {
             
                    if(empty(request()->minprice)){
                        request()->minprice = 0;
                    }
                    if(empty(request()->maxprice)){
                        request()->maxprice = 0;
                    }
                    $query->where('price', '>=',request()->minprice);
                    $query->where('price', '<=',request()->maxprice);
            }
            if(!empty(request()->amenities)){
                $query->whereHas('amenities', function ($q) {
                    $q->whereIn('amenity_id', request()->amenities);
                });
            }
            
            
            if (isset(request()->min_area)) {
                $query->where('area', '>=', request()->min_area);
            }
            if (isset(request()->max_area)) {
                $query->where('area', '<=', request()->max_area);
            }
            
            if (isset(request()->furnished)) {
                $query->where('furnished', request()->furnished);
            } 
            
            if (isset(request()->parking)) {
                $query->where('parking_space',  request()->parking);
            }
            if (isset(request()->community)) {
                $query->whereIn('communities', request()->community);
            }
            $query->where('property_status', 6);
        }]);
        $properties = $collection->orderBy('order', 'ASC')->where('is_active', 1)->get();
        if ($request->filled('search')) {
            //dd($properties);
        }
        // dd($properties);
        $statuses = Status::where('is_active', 1)->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $communities = Communities::where('is_active', 1)->latest()->take(14)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $searchproperties = Property::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        return view('frontend.ready',compact('properties','pagemeta','news','accommodataion','statuses','amenities','communities','neighbourhoods','accm','searchproperties'));
    }
    public function buy(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $url = $request->all();
        //dd($request->price);
        $statusdata = $request->status;
        $bedrooms = $request->bedrooms;
        $bathrooms = $request->bathrooms;
        $accommodataion = $request->accommodataion;
        $neighbourhood = $request->neighbourhood;
        $communitieslists = $request->communitieslists;
        $ranking = $request->ranking;
        $keyword = $request->searchkeywords;
        $searchkeyword = $request->search;
        $communities = $request->communities_id;
        $showlimit = $request->showlimit;
        $price = $request->price;
        $areavalue = $request->areavalue;
        $collection = Property::select('*');
        $collection->where('property_status',2);
        if ($request->filled('searchkeywords')) {
            $collection->where('title', 'like', "%$keyword%");
            $collection->orWhere('main_title', 'like', "%$keyword%");
            $collection->orWhere('sub_title', 'like', "%$keyword%");
            $collection->orWhere('address', 'like', "%$keyword%");
        }
        if ($request->filled('search')) {
            $collection->where('title', 'like', "%$searchkeyword%");
            $collection->orWhere('main_title', 'like', "%$searchkeyword%");
            $collection->orWhere('sub_title', 'like', "%$searchkeyword%");
            $collection->orWhere('address', 'like', "%$searchkeyword%");
        }
        if ($request->filled('status')) {
            $collection->whereIn('status', $statusdata);
        }
        if ($bedrooms) {
            $collection->whereIn('bedrooms', $bedrooms);
        }
        if ($request->filled('bathrooms')) {
            $collection->whereIn('bathrooms', $bathrooms);
        }
        if ($request->filled('communities_id')) {
            $collection->where('communities', $communities);
        }
        if ($request->filled('accommodataion')) {
            $collection->whereHas('accommodataions', function ($q) {
                $q->whereIn('accommodataion_id', request()->accommodataion);
            });
        }
        if ($request->filled('neighbourhood')) {
            $collection->whereHas('neighbourhoodss', function ($q) {
                $q->whereIn('neighbourhoods_id', request()->neighbourhood);
            });
        }
        if ($request->filled('communitieslists')) {
            $collection->whereIn('communities', $communitieslists);
        }
       
        if ($request->filled('areavalue')) {
            $expareavalue = explode('-', $areavalue);
            $min_areavalue = isset($expareavalue[0])?floatval($expareavalue[0]):0;
            $max_areavalue = isset($expareavalue[1])?floatval($expareavalue[1]):100000000;
            //if ($min_areavalue && $max_areavalue) {
                $collection->where('area', '>=', $min_areavalue);
                $collection->where('area', '<=', $max_areavalue);
            //}
        }
        if ($request->filled('price')) {
            $expprice = explode('-', $price);
            $min_price = isset($expprice[0])?$expprice[0]:0;
            $max_price = isset($expprice[1])?$expprice[1]:100000000;
            //if ($min_price && $max_price) {
                $collection->where('price', '>=', $min_price);
                $collection->where('price', '<=', $max_price);
            //}
        }
        
        if ($request->filled('ranking')) {
            $collection->whereIn('rating', $ranking);
            $communitiess = implode(",", $ranking);
        }
        if (empty($showlimit)) {
            $showlimit = 10;
        }
        $collection->orderBy('id', 'desc');
        $properties = $collection->paginate($showlimit);
        if ($request->method('POST') && $request->ajax()) {
            $current_page = request()->filled('page') ? request()->page : 1;
            $html = view('frontend.ajex_buypropertylist', compact('properties','pagemeta'))->render();
            return response()->json(['success' => true, 'html' => $html, 'page' => $current_page, 'count' => $properties->count(), 'url' => request()->getRequestUri() ]);
        }
        if (!empty($request->search) && $request->search != '') {
            $search = $request->search;
        } else {
            $search = '';
        }
        if (request()->communities) {
            $communities = request()->communities;
        } else {
            $communities = '';
        }
        $statuses = Status::where('is_active', 1)->get();
        $accommodataions = Accommodataion::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        $communitieslist = Communities::where('is_active', 1)->latest()->take(14)->get();
        $properties = Property::where('is_active', 1)->paginate(10);
        $featuredproperties = Property::where('is_active', 1)->where('property_type', 1)->take(8)->get();
        return view('frontend.buy', compact('statuses', 'accommodataions','pagemeta', 'neighbourhoods', 'properties', 'search', 'featuredproperties', 'communitieslist', 'communities'));
    }
    
    
    public function featuredListings1(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $url = $request->all();
        $statusdata = $request->status;
        $neighbourhood = $request->neighbourhood;
        $developer = $request->developer;
        $bedrooms = $request->bedrooms;
        $bathrooms = $request->bathrooms;
        $park = $request->park;
        //$status = $request->status;
        $accommodataions = $request->accommodataions;
        $showlimit = $request->showlimit;
        $min_price = $request->minprice;
        $max_price = $request->maxprice;
        $collection = Property::select('*');
        if ($request->filled('status')) {
            $collection->where('status', $statusdata);
        }
        if ($request->filled('accommodataion')) {
            $collection->whereHas('accommodataions', function ($q) {
                $q->whereIn('accommodataion_id', request()->accommodataion);
            });
        }
        if ($request->filled('neighbourhood')) {
            $collection->whereHas('neighbourhoodss', function ($q) {
                $q->where('name', 'like', request()->neighbourhood);
            });
        }
        if ($request->filled('bedrooms')) {
            $collection->where('bedrooms', '=', $bedrooms);
        }
        if ($request->filled('bathrooms')) {
            $collection->where('bathrooms', '=', $bathrooms);
        }
        if ($request->filled('park')) {
            $collection->where('parking_space', '=', $park);
        }
        if ($min_price && $max_price) {
            $collection->where('price', '>=', $min_price);
            $collection->where('price', '<=', $max_price);
        }
        if (empty($showlimit)) {
            $showlimit = 10;
        }
        $collection->orderBy('id', 'desc');
        $properties = $collection->paginate($showlimit);
        if ($request->method('POST') && $request->ajax()) {
            $current_page = request()->filled('page') ? request()->page : 1;
            $html = view('frontend.ajax_featuredlistings', compact('properties','pagemeta'))->render();
            return response()->json(['success' => true, 'html' => $html, 'page' => $current_page, 'count' => $properties->count(), 'url' => request()->getRequestUri() ]);
        }
        $statuses = Status::where('is_active', 1)->get();
        $accommodataions = Accommodataion::where('is_active', 1)->get();
        return view('frontend.featuredListings', compact('statuses', 'accommodataions','pagemeta'));
    }
    public function singleProperty($slug) {
        $property = Property::where('slug', $slug)->first();
        //dd($property);
        $longitude = $property->address_longitude;
        $latitude = $property->address_latitude;
        $nearbyproperty = DB::table("properties");
        if(!empty($longitude) && !empty($latitude)){
        $nearbyproperty = $nearbyproperty->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))* cos(radians(address_latitude)) * cos(radians(address_longitude) - radians(" . $longitude . ")) + sin(radians(" . $latitude . ")) * sin(radians(address_latitude))) AS distance"));
        $nearbyproperty = $nearbyproperty->having('distance', '<', 10);
        $nearbyproperty = $nearbyproperty->orderBy('distance', 'asc');
        }
        $nearbyproperty = $nearbyproperty->take(12)->get();
        return view('frontend.singleProperty', compact('property', 'nearbyproperty'));
    }
    
    public function singleOffPlanProperty($slug) {
        
        $property = Property::where('slug', $slug)->first();
        $property_id = $property->id;
        $title = $property->title;
        $longitude = $property->address_longitude;;
        $latitude = $property->address_latitude;
        $nearbyproperty = DB::table("properties");
        if(!empty($longitude) && !empty($latitude)){
            $nearbyproperty = $nearbyproperty->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))* cos(radians(address_latitude)) * cos(radians(address_longitude) - radians(" . $longitude . ")) + sin(radians(" . $latitude . ")) * sin(radians(address_latitude))) AS distance"));
            $nearbyproperty = $nearbyproperty->having('distance', '<', 10);
            $nearbyproperty = $nearbyproperty->where('status',2);
            $nearbyproperty = $nearbyproperty->orderBy('distance', 'asc');
        }
        $nearbyproperty = $nearbyproperty->take(2)->get();
        $news = Blog::latest()->take(3)->get();
        $communities = Communities::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $propertystatus = Property::join('statuss', 'properties.status', '=', 'statuss.id')
        ->where('properties.slug', $slug)
        ->select('statuss.name')
        ->first();
        $propertyaccommodataion = Property::join('accommodataions', 'properties.accommodation', '=', 'accommodataions.id')
        ->where('properties.slug', $slug)
        ->select('accommodataions.name')
        ->first();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        // dd($propertyaccommodataion);
        $bedroomsresults = DB::table('bedroom_property')
    ->join('bedrooms', 'bedroom_property.bedroom_id', '=', 'bedrooms.id')
    ->where('bedroom_property.property_id', $property->id)
    ->select('bedrooms.bedrooms')
    ->get();
    
    $imagegallery = Imagegallery::where('property_id', $property_id)->get();

$price = number_format(getprice($property->price), 2);
$price = rtrim(rtrim($price, '0'), '.');

        return view('frontend.singleoffplan', compact('property','bedroomsresults','title','amenities','accommodataion','neighbourhoods', 'nearbyproperty','news','communities', 'statuses','propertystatus','propertyaccommodataion','imagegallery','price'));
    }
    
    public function singleOffPlanProperty1($slug) {
        
        $property = Property::where('slug', $slug)->first();
        $property_id = $property->id;
        $title = $property->title;
        $longitude = $property->address_longitude;;
        $latitude = $property->address_latitude;
        $nearbyproperty = DB::table("properties");
        if(!empty($longitude) && !empty($latitude)){
            $nearbyproperty = $nearbyproperty->select("*", DB::raw("6371 * acos(cos(radians(" . $latitude . "))* cos(radians(address_latitude)) * cos(radians(address_longitude) - radians(" . $longitude . ")) + sin(radians(" . $latitude . ")) * sin(radians(address_latitude))) AS distance"));
            $nearbyproperty = $nearbyproperty->having('distance', '<', 10);
            $nearbyproperty = $nearbyproperty->where('status',2);
            $nearbyproperty = $nearbyproperty->orderBy('distance', 'asc');
        }
        $nearbyproperty = $nearbyproperty->take(2)->get();
        $news = Blog::latest()->take(3)->get();
        $communities = Communities::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $propertystatus = Property::join('statuss', 'properties.status', '=', 'statuss.id')
        ->where('properties.slug', $slug)
        ->select('statuss.name')
        ->first();
        $propertyaccommodataion = Property::join('accommodataions', 'properties.accommodation', '=', 'accommodataions.id')
        ->where('properties.slug', $slug)
        ->select('accommodataions.name')
        ->first();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        // dd($propertyaccommodataion);
        $bedroomsresults = DB::table('bedroom_property')
    ->join('bedrooms', 'bedroom_property.bedroom_id', '=', 'bedrooms.id')
    ->where('bedroom_property.property_id', $property->id)
    ->select('bedrooms.bedrooms')
    ->get();
    
    $imagegallery = Imagegallery::where('property_id', $property_id)->get();

$price = number_format(getprice($property->price), 2);
$price = rtrim(rtrim($price, '0'), '.');

        return view('frontend.singleoffplan1', compact('property','bedroomsresults','title','amenities','accommodataion','neighbourhoods', 'nearbyproperty','news','communities', 'statuses','propertystatus','propertyaccommodataion','imagegallery','price'));
    }
    
    
    public function singleTeamPage($slug) {
        
        $agents = User::where('slug', $slug)->first();
        $name = $agents->first_name;
        $email = $agents->email;
        $contact = $agents->phone;
        $description = $agents->description;
        $languages = $agents->languages;
        $image = $agents->image;
        $designation = $agents->designation;
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        $statuses = Status::where('is_active', 1)->get();
        $communities = Communities::all();
        $accommodataion = Accommodataion::where('is_active', 1)->orderBy('id', 'desc')->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->orderBy('id', 'desc')->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $news = Blog::latest()->take(3)->get();
        $featureProperties = Property::where('is_active', 1)->where('property_type',1)->where('is_feature', 1)->orderBy('id', 'desc')->limit(8)->get();
        return view('frontend.naveed',compact('statuses','pagemeta','news','communities','accommodataion','neighbourhoods','amenities','featureProperties','name','email','contact','description','image','languages','designation'));
    }
    
    public function news(Request $request) {
        $pagemeta = PageMetas::where('page_url',url()->current())->first();
        //$news = Blog::latest()->take(9)->get();
        $collection = Blog::select('blogs.*');
        if($request->keyword !=''){
          	$keyword = request()->keyword;
            $collection->where('blogs.title','like', "%$keyword%");
        }
        $collection->orderBy('blogs.id', 'DESC');
      	$allnews = $collection->where('is_active','1')->paginate(100);
      	
      	$news = Blog::latest()->take(3)->get();
        $communities = Communities::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        
        return view('frontend.news', compact('news','allnews','communities','amenities','statuses','accommodataion','neighbourhoods','pagemeta'));
    }
    public function news_details($slug) {
        $newsDetails = Blog::where('slug', $slug)->first();
        $title = $newsDetails->title;
        $news = Blog::latest()->take(3)->get();
        $communities = Communities::where('is_active', 1)->get();
        $amenities = Amenity::where('is_active', 1)->get();
        $statuses = Status::where('is_active', 1)->get();
        $accommodataion = Accommodataion::where('is_active', 1)->get();
        $neighbourhoods = Neighbourhoods::where('is_active', 1)->get();
        return view('frontend.newsDetails', compact('newsDetails','title','news','communities','amenities','statuses','accommodataion','neighbourhoods'));
    }
    
    public function language(Request $request) {
        return view('frontend.language');
    }
    
    function currency(Request $request){ 
        
          $currency = $request->currency;
          Session::put('currency',$currency);
          $to_currency = session()->get('currency');
          if(empty($to_currency)){
             $to_currency = 'AED';
          }
          $apikey = 'd5bb9c7bdb7a04c419ec';
          $from_currency ='AED';
          $from_Currency = urlencode($from_currency);
          $to_Currency = urlencode($to_currency);
          $query =  "{$from_Currency}_{$to_Currency}";
          $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
          $obj = json_decode($json, true);
          $val = floatval($obj["$query"]);
          Session::put('valprice',$val);
          return Redirect::back();
    }
    
    function areatype(Request $request){ 
        
          $areatype = $request->areatype;
          Session::put('areatype',$areatype);
          
          //dd(session()->all());
          
          return Redirect::back();
    }
    
    public function downloadZip()
    {
        $zip = new ZipArchive;
   
        $fileName = 'resumes.zip';
  
        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
            $files = File::files(public_path('frontend/assets/images/users'));
   
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
             
            $zip->close();
        }
    
        return response()->download(public_path($fileName));
    }
    
}
