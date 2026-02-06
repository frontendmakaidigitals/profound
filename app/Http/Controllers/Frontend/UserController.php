<?php
namespace App\Http\Controllers\Frontend;

use File;
use Hash;
use App\Models\Role;
use App\Models\User;
use App\Notifications\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Session;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class UserController extends Controller
{
    private $api_sms_key    = '';
    private $api_base_url   = '';
    private $applicationId  = '';
    private $messageId      = '';
    private $from_sms       = '';
    private $g_secret       = '';
    public function __construct()
    {
        $this->api_sms_key      = "App 57b27ffb8bb5060906617c311a05ad16-cdc80c27-6417-401b-bf07-4a7f64e6eb29";
        $this->applicationId    = "CD9D389061A65FAAB31A82A7462FC639";
        $this->messageId        = "E2A40C23FD8C1DE3147EC7D28D82F39C";
        $this->from_sms         = "TATAMO";
        $this->g_secret         = "6LeYe_cdAAAAAEDSJ21caTvHYv7ijo0h4_e15TGR"; 
        $this->api_base_url     = "https://pw8zp8.api.infobip.com/2fa/2/pin";        
    }
    public function verify_google_recaptcha($recaptcha){

        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' .urlencode($this->g_secret).'&response='.urlencode($recaptcha);      
        $response = file_get_contents($url);      
        $responseKeys = json_decode($response,true);
        return $responseKeys['success'];
    }
    public function reSentOTP(Request $request){

        if ($request->isMethod('post') && $request->ajax()) {
            
            //dd($request->all());
            $messages = [
                'phone.required' => 'फोन नंबर आवश्यक है'
            ];
            $validator = Validator::make($request->all(),[
                'phone' => 'required'
            ],$messages);
            if($validator->fails()){
                return response()->json(['error'=>$validator->errors()],401);
            }

            $to_sms = '91'.$request->phone;

            try{
                $client = new \GuzzleHttp\Client();
                $response = $client->request('post',$this->api_base_url, [
                        'headers' => [
                            'Authorization'   => $this->api_sms_key,
                            'Content-Type'    => 'application/json',
                            'Accept'          => 'application/json'
                        ],
                        'body' => json_encode(["applicationId" => $this->applicationId, "messageId" => $this->messageId, "from" => $this->from_sms, "to" => $to_sms ])
                    ]);
                $statusCode = $response->getStatusCode();
                $content = json_decode($response->getBody(), true);
                //dd($content);
                if (isset($content['pinId']) && $statusCode == 200) {
                    $request->session()->put('pinId', $content['pinId']);
                    return response()->json([
                        'success'       => true,
                        'message'       => 'ओटीपी आपके नंबर पे भेजा गया है'
                    ]);
                }else {
                   return response()->json(['error'=>[['Sorry! problem with sms api']]], 401); 
                }
            }catch( RequestException $e ){
                //dd(Psr7\str($e->getResponse()));
                if ($e->hasResponse()) {
                    $decoded_response = decode_response(Psr7\str($e->getResponse()),'{','}');
                    $response_array = json_decode('{'.$decoded_response.'}');
                    $error = ($response_array->message)?$response_array->message:'Something wrong with sms api';
                    return response()->json(['error'=>[[$error]]], 401);                   
                }
            }
        }
    }

    public function sentOTP(Request $request){

        if ($request->isMethod('post') && $request->ajax()) {

            //dd($request->all());
            //validation start
            $messages = [
                'first_name.required'     => 'नाम आवश्यक है',
                'phone.required'          => 'फोन नंबर आवश्यक है',                
                'chasis_number.required'  => 'चेसिस नंबर आवश्यक है',
                'chasis_number.unique'  => 'चेसिस नंबर डुप्लीकेट की अनुमति नहीं देता',                
                'application.required'    => 'कृपया एक आवेदन चुनें',
                'agree_tnc.required'      => 'यह क्षेत्र आवश्यक है',
                'agree_for_whatsapp.required' => 'यह क्षेत्र आवश्यक है',
                'g-recaptcha-response.required' => 'रिकैप्चा फ़ील्ड आवश्यक है'
            ];
            $validator = Validator::make($request->all(),[
                'first_name'      => 'required|min:2',
                'phone'           => 'required',
                'chasis_number'   => 'required|unique:users,chasis_number',
                'application'     => 'required',
                'agree_tnc'       => 'required',
                'agree_for_whatsapp' => 'required',
                'g-recaptcha-response' => 'required',
            ],$messages);
            if($validator->fails()){
                return response()->json(['error'=>$validator->errors()],401);
            }

            /*Validate Captcha*/
            $rcaptcha = trim($_POST['g-recaptcha-response']);
            $is_validCaptcha = $this->verify_google_recaptcha($rcaptcha);
            if(empty($is_validCaptcha)){
                return response()->json(['error'=>[['Invalid Rcaptcha!']]], 401);   
            } 

            /*Send otp pin*/
            $to_sms = '91'.$request->phone;

            try{
                $client = new \GuzzleHttp\Client();
                $response = $client->request('post',$this->api_base_url, [
                        'headers' => [
                            'Authorization'   => $this->api_sms_key,
                            'Content-Type'    => 'application/json',
                            'Accept'          => 'application/json'
                        ],
                        'body' => json_encode(["applicationId" => $this->applicationId, "messageId" => $this->messageId, "from" => $this->from_sms, "to" => $to_sms ])
                    ]);
                $statusCode = $response->getStatusCode();
                $content = json_decode($response->getBody(), true);
                //dd($content);
                if (isset($content['pinId']) && $statusCode == 200) {
                    $request->session()->put('pinId', $content['pinId']);
                    $formdata = $request->all();
                    $html = view('frontend.otp_ajax',compact('formdata'))->render();
                    return response()->json([
                        'success'       => true,
                        'data'          => [],
                        'message'       => 'ओटीपी आपके नंबर पे भेजा गया है',
                        'html'          => $html
                    ]);
                }else {
                   return response()->json(['error'=>[['Sorry! problem with sms api']]], 401); 
                }
            }catch( RequestException $e ){
                //dd(Psr7\str($e->getResponse()));
                if ($e->hasResponse()) {
                    $decoded_response = decode_response(Psr7\str($e->getResponse()),'{','}');
                    $res = '{'.$decoded_response.'}}}';
                    $response_array = json_decode($res,true);
                    $msg = $response_array['requestError']['serviceException']['text'];
                    $error = !empty($response_array)?$response_array['requestError']['serviceException']['text']:'Something wrong with otp api';
                    return response()->json(['error'=>[[$error]]], 401);                   
                }
            }
        }
    }

    public function store(Request $request){
        if ($request->isMethod('post') && $request->ajax()) {

            //validation start
            $messages = [
                'first_name.required'     => 'नाम आवश्यक है',
                'phone.required'          => 'फोन नंबर आवश्यक है',
                'chasis_number.required'  => 'चेसिस नंबर आवश्यक है',
                'application.required'    => 'कृपया एक आवेदन चुनें',
                'agree_tnc.required'      => 'यह क्षेत्र आवश्यक है',
                'agree_for_whatsapp.required' => 'यह क्षेत्र आवश्यक है',
                'otp.required'            => 'ओटीपी फ़ील्ड आवश्यक है'
            ];
            $validator = Validator::make($request->all(),[
                'first_name'      => 'required|min:2',
                'phone'           => 'required',
                'chasis_number'   => 'required|unique:users,chasis_number',
                'application'     => 'required',
                'agree_tnc'       => 'required',
                'agree_for_whatsapp' => 'required',
                'otp'             => 'required',
            ],$messages);

            if($validator->fails()){
                return response()->json(['error'=>$validator->errors()],401);
            }
            //validation end

            //dd($request->all());
            try{
                
                $pinId = Session::get('pinId');
                $client = new \GuzzleHttp\Client();
                $response = $client->request('post','https://wprw11.api.infobip.com/2fa/2/pin/'.$pinId.'/verify', [
                        'headers' => [
                            'Authorization'   => $this->api_sms_key,
                            'Content-Type'    => 'application/json',
                            'Accept'          => 'application/json'
                        ],
                        'body' => json_encode(["pin" => $request->otp])
                    ]);
                $statusCode = $response->getStatusCode();
                $content = json_decode($response->getBody(), true);
                //dd($content);
                if ($content['verified'] == true && $statusCode == 200) {
                    $customer = new User();
                    foreach($request->all() as $key=>$value){
                        if( in_array( $key,$customer->getFillable() ) ){
                            $customer->$key = $value;
                        }
                    }
                    $customer->password = Hash::make(123456); 
                    //save user meta
                    //$customer->setMeta('chasis_number',$request->chasis_number);
                    //$customer->setMeta('application',$request->application);
                    //$customer->setMeta('others_application',$request->others_application);
                    $customer->setMeta('agree_tnc',$request->agree_tnc);
                    $customer->setMeta('agree_for_whatsapp',$request->agree_for_whatsapp);
                    $customer->save();
                    $customer->roles()->attach(Role::where('name', 'driver')->first());
                    Session::forget('pinId');
                    $html = view('frontend.reg_success_ajax',compact('customer'))->render();
                    return response()->json([
                        'success'       => true,
                        'data'          => [],
                        'message'       => 'आपका खाता सफलतापूर्वक बनाया गया  है',
                        'html'          => $html
                    ]);
                }else{
                    return response()->json(['error'=>[['अमान्य ओटीपी']]], 401);
                }
            }catch( RequestException $e ){
                //dd(Psr7\str($e->getResponse()));
                if ($e->hasResponse()) {
                    $decoded_response = decode_response(Psr7\str($e->getResponse()),'{','}');
                    $res = '{'.$decoded_response.'}}}';
                    $response_array = json_decode($res,true);
                    $msg = $response_array['requestError']['serviceException']['text'];
                    $error = !empty($response_array)?$response_array['requestError']['serviceException']['text']:'Something wrong with sms api';
                    return response()->json(['error'=>[[$error]]], 401);                   
                }
            }
        }
    }
}