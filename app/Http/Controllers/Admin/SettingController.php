<?php



namespace App\Http\Controllers\Admin;



use File;

use Auth;

use App\Models\User;

use App\Models\Setting;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Validator;

use Storage;


class SettingController extends Controller

{

    public const REDIRECT_URL = '/generalSetting';



    public function __construct()

    { 

        

    }



    public function generalSettingUpdate(Request $request)

    { 

    	//Create general Setting

    	$generalSettings = Setting::pluck('value','key');        

        if( $request->isMethod('post') && $request->ajax()){

            

            //Setting::delete();

            // dd($request->all());

            //  $messages = [

            //     'api_key'=>'API Key is field Required',
            //     'application_id'=>'Application ID field is Required ',
            //     'message_id'=>'Message ID field is Required ',
            //     'sender_id'=>'Sender ID field is Required ',
            //     'site_key'=>'Site key field is Required ',
            //     'secret_key'=>'Secret key field is Required ',
            //     'phone'=>'Phone field is Required ',
            //     'mail'=>'Mail field is Required ',
            //     'address'=>'Address field is Required ',
            //     'facebook'=>'Facebook field is Required ',
            //     'twitter'=>'Twitter field is Required ',
            //     'linkedin'=>'Linkedin field is Required ',
            //     'instagram'=>'Instagram field is Required ',
            //     'vimeo'=>'Vimeo field is Required ',
            //     'behance'=>'Behance field is Required ',
            //     'yoast'=>'Yoast field is Required ',
            //     'pinterest'=>'Pinterest field is Required ',
            //     'iframe'=>'Map field is Required ',

            // ];

            // $validator = Validator::make($request->all(), [

            //     'generalSetting'=>[

            //     'api_key'=> 'required',
            //     'application_id'=> 'required',
            //     'message_id'=> 'required',
            //     'sender_id'=> 'required',
            //     'site_key'=> 'required',
            //     'secret_key'=> 'required',
            //     'phone'=> 'required',
            //     'mail'=> 'required',
            //     'address'=> 'required',
            //     'facebook'=> 'required',
            //     'twitter'=> 'required',
            //     'linkedin'=> 'required',
            //     'instagram'=> 'required',
            //     'vimeo'=> 'required',
            //     'behance'=> 'required',
            //     'yoast'=> 'required',
            //     'pinterest'=> 'required',
            //     'iframe'=> 'required',

            //     ]

                

            //   ],$messages);

            // if ($validator->fails()) {

            //     return response()->json(['error'=>$validator->errors()], 401);

            // }

            // Setting::getQuery()->delete();

     		foreach(request()->generalSetting as $key=>$value){
                
                if($value && ($key === 'desktop_home_video' || $key === 'mobile_home_video')){
                   
                    
                    $file_name = 'file_'.time().'.'.$value->getClientOriginalExtension();
                    $destinationPath = public_path('frontend/assets/videos/home/');
                    
                    $value->move( $destinationPath, $file_name );
                
                    $value    = 'frontend/assets/videos/home/'.$file_name ;
                    
                }
                $isSettingExist = Setting::where('key',$key)->exists();
                if($isSettingExist){
                    $setting = Setting::where('key',$key)->first();
                }else{
                    $setting = new Setting();
                    $setting->key = $key;
                }
                
                $setting->value =$value;

                $setting->save();

            } 



            return response()->json([

                    'success' => true,

                    'data'   => [],

                    'message'   =>'General settings has been updated.',

                    'redirect_url'   =>url(Auth::user()->roles()->first()->name.self::REDIRECT_URL)

            ]);

        }

        

        return view('admin.settings.generalSetting',compact('generalSettings'));

    }

}

