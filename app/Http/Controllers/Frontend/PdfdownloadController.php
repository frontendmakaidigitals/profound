<?php



namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Careers;

use App\Models\AgentContact;

use App\Models\Contact;

use App\Models\Pdfdetail;

use Illuminate\Support\Facades\Http;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Str;

use Redirect;

use PDF;

use Mail;







class PdfdownloadController extends Controller

{

    public function __construct() {

    }

    public function downloadPdf(Request $request){

       

        

            //dd('hello');

            $messages = [

                'name'=>'Name is Required',

                'email'=>'Email is Required',

            ];

            $validator = Validator::make($request->all(), [

                'name'=>'required',

                'email'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());

            $pdfdetail = new Pdfdetail;

            $pdfdetail->type = $request->type;

            $pdfdetail->propert_id = $request->propert_id;

            $pdfdetail->propert_pdf = $request->data_item;

            $pdfdetail->name = $request->name;

            $pdfdetail->email = $request->email;

            $pdfdetail->country = $request->country;

            $pdfdetail->phone = $request->phone;

            

            $pdfdetail->save();

            

            $details = [

                'name'      =>  $request->name,

                'email'     =>  $request->email,

                'country'   =>  $request->country,

                'phone'     =>  $request->phone,

                'file'      =>  $request->data_item,

                'title'     =>  $request->title,

            ];

            

            // Mail::send('frontend.emails.pdfMail',$details, 

            // function($message)use($details) {

            //     $message->to($details['email'])->subject($details['title']);

            //     $message->from('info@profoundrealtors.com', 'Profound');

            // });

            $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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

                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            

            return redirect('thank-you'); 

            

        

        

    }


    public function registerYourInterest(Request $request){

       

            $page_url =url()->previous();



            $details = [

                'name'              =>  $request->name,

                'email'             =>  $request->email,

                //'country'           =>  $request->country,

                'phone'             =>  $request->phone,

                'country_code'      =>  $request->country_code,

                'title'             =>  'Register your Interest',

                'page_url'          =>  $page_url,

            ];

            

            //Mail::send('frontend.emails.RegisteryourInterest',$details, 

            // function($message)use($details) {

            //     $message->to('info@profoundrealtors.com')->subject($details['title']);

            //     $message->from('info@profoundrealtors.com', 'Profound');

            // });

            $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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

                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            return redirect('thank-you'); 

    }
    
    public function calculateMortgage(Request $request){

            $page_url =url()->previous();

            $details = [

                'rate'              =>  $request->rate,
                'loan_term'              =>  $request->loan_duration,
                'downpayment'              =>  $request->downPay,
                'property_price'              =>  $request->prop_price,
                'monthlypayment'              =>  $request->monthlyPay,

                'email'             =>  $request->consultEmail,

                'phone'             =>  $request->consultPhone,

                'communities'      =>  $request->consultCommunity,
                'message'      =>  $request->consultMsg,

                'title'             =>  'Mortgage Consultation',

                'page_url'          =>  $page_url,

            ];

            

            //Mail::send('frontend.emails.RegisteryourInterest',$details, 

            // function($message)use($details) {

            //     $message->to('info@profoundrealtors.com')->subject($details['title']);

            //     $message->from('info@profoundrealtors.com', 'Profound');

            // });

            $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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

                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            return redirect('thank-you'); 

    }

    

        public function contactAgent(Request $request){

       

        

            //dd('hello');

            $messages = [

                'user_name'=>'Name is Required',

                'email'=>'Email is Required',

            ];

            $validator = Validator::make($request->all(), [

                'user_name'=>'required',

                'email'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());
$page_url =url()->previous();
            $agentcont = new AgentContact;

            $agentcont->form_type = $request->form_type;

            $agentcont->propert_id = $request->propert_id;

            $agentcont->contact_type = $request->contact_type;

            $agentcont->user_name = $request->user_name;

            $agentcont->email = $request->email;

            $agentcont->schedule_date = $request->schedule_date;

            $agentcont->phone = $request->phone;
            $agentcont->page_url = $page_url;

            

            $details = [

            'name' =>  $request->user_name,

            'email' => $request->email,

            'phone' => $request->phone,

            'schedule_date' => $request->schedule_date,

            'contact_type' => $request->contact_type,
            'page_url' => $page_url,

            ];

            

            $agentmail = $request->agent_mail;

            // \Mail::to($agentmail)->send(new \App\Mail\ContactMail($details));

            $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjuvilp/'; //sent url
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
                if($response->status=='success'){ //status in response
                    // return redirect()->route('thankYou');
                }

            

             if($response->status=='success') {

                $result['status'] = 1;

                $result['message'] = 'Thank you for filling out your information..!';

             }

            echo json_encode($result);

            die;

        

        

        

           

            

        

        

    }

    

    public function requestInfo(Request $request){

       

        

            //dd('hello');

            $messages = [

                'user_name'=>'Name is Required',

                'email'=>'Email is Required',

                'phone'=>'Email is Required',

            ];

            $validator = Validator::make($request->all(), [

                'user_name'=>'required',

                'email'=>'required',

                'phone'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());
$page_url =url()->previous();
            $agentcont = new AgentContact;

            $agentcont->form_type = $request->form_type;

            $agentcont->propert_id = $request->propert_id;

            $agentcont->user_name = $request->user_name;

            $agentcont->email = $request->email;

            $agentcont->phone = $request->phone;
            $agentcont->page_url = $page_url;

            

            $details = [

            'name' =>  $request->user_name,

            'email' => $request->email,

            'phone' => $request->phone,
            'page_url' => $page_url,

            ];

            

            $agentmail = $request->agent_mail;

            

            // \Mail::to($agentmail)->send(new \App\Mail\ContactMail($details));

            $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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
                // if($response->status=='success'){ //status in response
                //     // return redirect()->route('thankYou');
                // }

            

            if($response->status=='success') {

                $result['status'] = 1;

                $result['message'] = 'Thank you for filling out your information..!';

             }

            echo json_encode($result);

            die;

    }

    

    public function joinTeam(Request $request){

       

        

            //dd('hello');

            $messages = [

                'name'=>'Name is Required',

                'email'=>'Email is Required',

                'phone'=>'Phone is Required',

                'resume'=>'Resume is Required',

            ];

            $validator = Validator::make($request->all(), [

                'name'=>'required',

                'email'=>'required',

                'phone'=>'required',

                'resume'=>'required',

              ],$messages);

              

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());

            $contact = new Careers;

           

            $contact->name = $request->name;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            // $contact->resume = $request->resume;

              if($request->hasFile('resume'))

                {

                    $resume = $request->file('resume');

                    $file_name = 'file_'.time().'.'.$resume->getClientOriginalExtension();

                    $destinationPath = public_path('frontend/assets/images/users/');

                    if (! File::exists($destinationPath)){

                        File::makeDirectory( $destinationPath );

                    } 

                    $resume->move( $destinationPath, $file_name );

                

                    $contact->cv    = 'frontend/assets/images/users/'.$file_name ;

                

                }

            //$contact->message = $request->propertyDetails;

            //$contact->message = $request->message;

            $contact->save();

            $document = url('/').'/'.$contact->cv;

            // dd($request->message);
$page_url =url()->previous();
            $details = [

             'name' =>  $request->name,

             'email' => $request->email,

             'phone' => $request->phone,

             'message' => $request->message,

             'document' => $document,

             'page_url' => $page_url,

            ];

            

            /* Send email start 

            $email = $request->email;

            $name = $request->name;

            $message = 'This email sent form Profound';

            Mail::send('frontend.emails.joinTeamMail', array('data' => $details), function($message) use($email,$name) {

                    $message->to('info@profoundrealtors.com', $name)->subject('Join Our Team');

                    // $message->to('ersan.saini.gmail.com', $name)->subject('Contact User Mail');

            });

            /* Send email end */

            $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjup94x/'; //sent url
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
                
                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            if($contact){

                return response()->json([

                    'success'   => true,

                    'message'   =>'Thank you for filling out your information!'

                ]);

            }else{

                return response()->json([

                    'success' => false,

                    'message'   =>'Failed, try again'

                ],401);

            }

            

            

    }
    /*
    public function sellContactUsWithMessage(Request $request){

            $messages = [

                'name'=>'Name is Required',

                'email'=>'Email is Required',

                'phone'=>'Phone is Required',

                'message'=>'Message is Required',

            ];

            $validator = Validator::make($request->all(), [

                'name'=>'required',

                'email'=>'required',

                'phone'=>'required',

                'message'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }


            $contact = new Contact;

            $contact->type = $request->type;

            $contact->name = $request->name;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            $contact->message = $request->message;

            $contact->save();

            $details = [

             'name' =>  $request->name,

             'email' => $request->email,

             'phone' => $request->phone,

             'message' => $request->message,

            ];

               $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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


            if($contact){

                return response()->json([

                    'success'   => true,

                    'message'   =>'Thank you for filling out your information!'

                ]);


            }else{

                return response()->json([

                    'success' => false,

                    'message'   =>'Failed, try again'

                ],401);

            }

    }
    */
    
    
    public function sellContactUs(Request $request){
        
        // bitrix24
        // if (Auth::user() && Auth::user()->token()->expires_at < now()) {
        //     return response()->json(['error' => 'Session Expired. Please Login Again.' , 'status' => 504]);
        // }
        // if(Auth::user() == null) return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        
            // Get all incoming request data
            $requestData = $request->all();

            // Extract the URL from the request data and remove it from the data to be sent
            $url = 'https://crm.profoundrealtors.com/rest/1/'.env("bitrix24_api_key").'/';
            unset($requestData['kpi_link']);
            $title = 'WEBSITE LEAD FROM';
            // unset($requestData['TITLE']);
            // Prepare the data to be sent to the URL
            $requestDataToSend = [
                'fields' => array_merge($requestData, [
                    // Add the TITLE field
                    'TITLE' => "WEBSITE LEAD FROM",
                    // Add the EMAIL and PHONE fields if they exist in $requestData
                    'NAME' => $request->name,
                    'EMAIL' => isset($request->email) ? [['VALUE' => $request->email, 'VALUE_TYPE' => 'WORK']] : null,
                    'PHONE' => isset($request->phone) ? [['VALUE' => $request->phone, 'VALUE_TYPE' => 'WORK']] : null,
                    'COMMENTS' => $request->message,
                    'UF_CRM_1718286070794' => url()->previous(),
                    'UF_CRM_1718286106153' => $request->propertyDetails
                ]),
                'params' => ['REGISTER_SONET_EVENT' => 'Y']
            ];


            $apiUrl = 'https://crm.profoundrealtors.com/rest/1/8a1j7lkicint8d19/';

            // Send a POST request to the provided URL
            $newUrl = $apiUrl . '/crm.lead.add.json?';
            $response = Http::withOptions(['verify' => false])
                            ->post($newUrl, $requestDataToSend);

            // Check if the request was successful (status code 2xx)
            // if ($response->successful()) {
            //     // Extract the ID from the response
            //     $responseData = $response->json();
            //     $leadID = $responseData['result'];
            //     // Return response with product ID
            //     return response()->json(['id' => $leadID], 201);
            // } else {
            //     // Log the error if the request was not successful
            //     \Log::error('Failed to add lead:', ['status_code' => $response->status(), 'response' => $response->json()]);
            //     return response()->json(['error' => 'Failed to add lead'], 500);
            // }
        // bitrix24
        
        
        

            $messages = [

                'name'=>'Name is Required',

                'email'=>'Email is Required',

                'phone'=>'Phone is Required',
                
                'message'=>'Message is Required',

            ];

            $validator = Validator::make($request->all(), [

                'name'=>'required',

                'email'=>'required',

                'phone'=>'required',

                'message'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());
            
            $page_url =url()->previous();
            $contact = new Contact;

            $contact->type = $request->type;

            $contact->name = $request->name;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            $contact->propertyDetails = $request->propertyDetails;

            $contact->message = $request->message;
            $contact->page_url = $page_url;

            $contact->save();

            $details = [

             'name' =>  $request->name,

             'email' => $request->email,

             'phone' => $request->phone,

             'message' => $request->propertyDetails,
             
             'page_url' => $page_url,

            ];
            
            $details2 = [

             'first_name' =>  $request->name,

             'email' => $request->email,

             'phone_number' => $request->phone,

             'properties_description' => $request->propertyDetails,
             
             'message' => $request->message,
             
             'form_type'     => 'Popup Form',
             
             'source' => 'Website',
             
             

            ];
            
            
            $url2 = 'https://dialer-profound.doocti.com/api?list_id=6&channel=lead&autoassign=true'; //sent url
                $headers_curl2  = [
                        'Content-Type: application/json',
                        'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbGllbnQiOiJBZG1pbiIsInRlbmFudF9pZCI6ImN0aV9kb29jdGl2Ml8yMDIyMDgyNiIsInNjb3BlIjoiYXBpLXYzIiwiaXNzIjoiaHR0cHM6Ly9saXZlLWRvb2N0aS5hdS5hdXRoMC5jb20vIiwic3ViIjoiejZMMzlyekRhZmtub0tucjVWUHloMU8zRW9aVUxGUGRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vcHJvZC1hcGkuZG9vY3RpLmNvbSIsImV4cCI6MTc2MTQ1NTg3MjQwNiwiaWF0IjoxNjk4Mjk3NDcyfQ.FbO-DKVzgnhstEaW98zMHBY4-XtVoOicxQNFn99uCmA'
                ];
                                                        
                $ch2 = curl_init();
                curl_setopt($ch2, CURLOPT_URL, $url2);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($details2));           
                curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers_curl2);
                $result2 = curl_exec($ch2);
                curl_close($ch2);
                

            

            /* Send email start */

            $email = $request->email;

            $name = $request->name;

            $message = 'This email sent form Profound';

            Mail::send('frontend.emails.enquireMail', array('data' => $details), function($message) use($email,$name,$page_url  ) {

                    // $message->to('info@profoundrealtors.com', $name)->subject('Contact User Mail');
                    $message->to('enquiry@profoundrealtors.com', $name)->subject('Contact User Mail');
                    // $message->to('ersan.saini.gmail.com', $name)->subject('Contact User Mail');
                    
                     if (Str::contains($page_url, ['/geneva', '/geneva/'])) {
            $message->to('geneva@profoundrealtors.com', $name)->subject('Contact User Mail');
        }

            }); 


               $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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

                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            /* Send email end */

            // return redirect(url('thank-you'));

             // return view('frontend.thankYou');
            



            if($contact){

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

    }
    public function registerInterest(Request $request){
        
        
            // Get all incoming request data
            $requestData = $request->all();

            // Extract the URL from the request data and remove it from the data to be sent
            $url = 'https://crm.profoundrealtors.com/rest/1/'.env("bitrix24_api_key").'/';
            unset($requestData['kpi_link']);
            $title = 'WEBSITE LEAD FROM';
            // unset($requestData['TITLE']);
            // Prepare the data to be sent to the URL
            $requestDataToSend = [
                'fields' => array_merge($requestData, [
                    // Add the TITLE field
                    'TITLE' => "WEBSITE LEAD FROM",
                    // Add the EMAIL and PHONE fields if they exist in $requestData
                    'NAME' => $request->name,
                    'EMAIL' => isset($request->email) ? [['VALUE' => $request->email, 'VALUE_TYPE' => 'WORK']] : null,
                    'PHONE' => isset($request->phone) ? [['VALUE' => $request->phone, 'VALUE_TYPE' => 'WORK']] : null,
                    'COUNTRY' => $request->country,
                    'UF_CRM_1718286070794' => url()->previous(),
                    'UF_CRM_1718286106153' => $request->propertyDetails
                ]),
                'params' => ['REGISTER_SONET_EVENT' => 'Y']
            ];


            $apiUrl = 'https://crm.profoundrealtors.com/rest/1/8a1j7lkicint8d19/';

            // Send a POST request to the provided URL
            $newUrl = $apiUrl . '/crm.lead.add.json?';
            $response = Http::withOptions(['verify' => false])
                            ->post($newUrl, $requestDataToSend);

            // Check if the request was successful (status code 2xx)
            // if ($response->successful()) {
            //     // Extract the ID from the response
            //     $responseData = $response->json();
            //     $leadID = $responseData['result'];
            //     // Return response with product ID
            //     return response()->json(['id' => $leadID], 201);
            // } else {
            //     // Log the error if the request was not successful
            //     \Log::error('Failed to add lead:', ['status_code' => $response->status(), 'response' => $response->json()]);
            //     return response()->json(['error' => 'Failed to add lead'], 500);
            // }
        // bitrix24
        
        
        

            $messages = [

                'name'=>'Name is Required',

                'email'=>'Email is Required',

                'phone'=>'Phone is Required',
                
                'country'=>'Message is Required',

            ];

            $validator = Validator::make($request->all(), [

                'name'=>'required',

                'email'=>'required',

                'phone'=>'required',

                'country'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());
            
            $page_url =url()->previous();
            $contact = new Contact;

            $contact->type = $request->type;

            $contact->name = $request->name;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            $contact->propertyDetails = $request->propertyDetails;

            $contact->page_url = $page_url;

            $contact->save();

            $details = [

             'name' =>  $request->name,

             'email' => $request->email,

             'phone' => $request->phone,

             'country' => $request->country,
             
             'page_url' => $page_url,

            ];
            
            $details2 = [

             'first_name' =>  $request->name,

             'email' => $request->email,

             'phone_number' => $request->phone,

             'country' => $request->country,
             
             
             'form_type'     => 'Popup Form',
             
             'source' => 'Website',
             
             

            ];
            
            
            $url2 = 'https://dialer-profound.doocti.com/api?list_id=6&channel=lead&autoassign=true'; //sent url
                $headers_curl2  = [
                        'Content-Type: application/json',
                        'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbGllbnQiOiJBZG1pbiIsInRlbmFudF9pZCI6ImN0aV9kb29jdGl2Ml8yMDIyMDgyNiIsInNjb3BlIjoiYXBpLXYzIiwiaXNzIjoiaHR0cHM6Ly9saXZlLWRvb2N0aS5hdS5hdXRoMC5jb20vIiwic3ViIjoiejZMMzlyekRhZmtub0tucjVWUHloMU8zRW9aVUxGUGRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vcHJvZC1hcGkuZG9vY3RpLmNvbSIsImV4cCI6MTc2MTQ1NTg3MjQwNiwiaWF0IjoxNjk4Mjk3NDcyfQ.FbO-DKVzgnhstEaW98zMHBY4-XtVoOicxQNFn99uCmA'
                ];
                                                        
                $ch2 = curl_init();
                curl_setopt($ch2, CURLOPT_URL, $url2);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($details2));           
                curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers_curl2);
                $result2 = curl_exec($ch2);
                curl_close($ch2);
                

            

            /* Send email start */

            $email = $request->email;

            $name = $request->name;

            $message = 'This email sent form Profound';

            Mail::send('frontend.emails.register-interest', array('data' => $details), function($message) use($email,$name,$page_url  ) {

                    // $message->to('info@profoundrealtors.com', $name)->subject('Contact User Mail');
                    $message->to('enquiry@profoundrealtors.com', $name)->subject('Contact User Mail');
                    // $message->to('ersan.saini.gmail.com', $name)->subject('Contact User Mail');
                    
                     if (Str::contains($page_url, ['/geneva', '/geneva/'])) {
            $message->to('geneva@profoundrealtors.com', $name)->subject('Contact User Mail');
        }

            }); 


               $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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

                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            /* Send email end */

            // return redirect(url('thank-you'));

             // return view('frontend.thankYou');
            



            if($contact){

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

    }
    
    public function sellPdfForm(Request $request){
        
            // Get all incoming request data
            $requestData = $request->all();

            // Extract the URL from the request data and remove it from the data to be sent
            $url = 'https://crm.profoundrealtors.com/rest/1/'.env("bitrix24_api_key").'/';
            unset($requestData['kpi_link']);
            $title = 'WEBSITE LEAD FROM';
            // unset($requestData['TITLE']);
            // Prepare the data to be sent to the URL
            $requestDataToSend = [
                'fields' => array_merge($requestData, [
                    // Add the TITLE field
                    'TITLE' => "WEBSITE LEAD FROM",
                    // Add the EMAIL and PHONE fields if they exist in $requestData
                    'NAME' => $request->name,
                    'EMAIL' => isset($request->email) ? [['VALUE' => $request->email, 'VALUE_TYPE' => 'WORK']] : null,
                    'PHONE' => isset($request->phone) ? [['VALUE' => $request->phone, 'VALUE_TYPE' => 'WORK']] : null,
                    'COMMENTS' => $request->message,
                    'UF_CRM_1718286070794' => url()->previous(),
                    'UF_CRM_1718286106153' => $request->propertyDetails
                ]),
                'params' => ['REGISTER_SONET_EVENT' => 'Y']
            ];


            $apiUrl = 'https://crm.profoundrealtors.com/rest/1/8a1j7lkicint8d19/';

            // Send a POST request to the provided URL
            $newUrl = $apiUrl . '/crm.lead.add.json?';
            $response = Http::withOptions(['verify' => false])
                            ->post($newUrl, $requestDataToSend);

            // Check if the request was successful (status code 2xx)
            // if ($response->successful()) {
            //     // Extract the ID from the response
            //     $responseData = $response->json();
            //     $leadID = $responseData['result'];
            //     // Return response with product ID
            //     return response()->json(['id' => $leadID], 201);
            // } else {
            //     // Log the error if the request was not successful
            //     \Log::error('Failed to add lead:', ['status_code' => $response->status(), 'response' => $response->json()]);
            //     return response()->json(['error' => 'Failed to add lead'], 500);
            // }
        // bitrix24
        
        
        

            $messages = [

                'name'=>'Name is Required',

                'email'=>'Email is Required',

                'phone'=>'Phone is Required',
                
                'message'=>'Message is Required',

            ];

            $validator = Validator::make($request->all(), [

                'name'=>'required',

                'email'=>'required',

                'phone'=>'required',

                'message'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());
            
            $page_url =url()->previous();
            $contact = new Contact;

            $contact->type = $request->type;

            $contact->name = $request->name;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            $contact->message = $request->message;
            $contact->page_url = $page_url;

            $contact->save();

            $details = [

             'name' =>  $request->name,

             'email' => $request->email,

             'phone' => $request->phone,

             'message' => $request->message,
             
             'page_url' => $page_url,

            ];
            
            $details2 = [

             'first_name' =>  $request->name,

             'email' => $request->email,

             'phone_number' => $request->phone,
             
             'message' => $request->message,
             
             'form_type'     => 'Popup Form',
             
             'source' => 'Website',
             
             

            ];
            
            
            $url2 = 'https://dialer-profound.doocti.com/api?list_id=6&channel=lead&autoassign=true'; //sent url
                $headers_curl2  = [
                        'Content-Type: application/json',
                        'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbGllbnQiOiJBZG1pbiIsInRlbmFudF9pZCI6ImN0aV9kb29jdGl2Ml8yMDIyMDgyNiIsInNjb3BlIjoiYXBpLXYzIiwiaXNzIjoiaHR0cHM6Ly9saXZlLWRvb2N0aS5hdS5hdXRoMC5jb20vIiwic3ViIjoiejZMMzlyekRhZmtub0tucjVWUHloMU8zRW9aVUxGUGRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vcHJvZC1hcGkuZG9vY3RpLmNvbSIsImV4cCI6MTc2MTQ1NTg3MjQwNiwiaWF0IjoxNjk4Mjk3NDcyfQ.FbO-DKVzgnhstEaW98zMHBY4-XtVoOicxQNFn99uCmA'
                ];
                                                        
                $ch2 = curl_init();
                curl_setopt($ch2, CURLOPT_URL, $url2);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($details2));           
                curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers_curl2);
                $result2 = curl_exec($ch2);
                curl_close($ch2);
                

            

            /* Send email start */

            $email = $request->email;

            $name = $request->name;

            $message = 'This email sent form Profound';

            Mail::send('frontend.emails.enquireMail', array('data' => $details), function($message) use($email,$name,$page_url  ) {

                    // $message->to('info@profoundrealtors.com', $name)->subject('Contact User Mail');
                    $message->to('enquiry@profoundrealtors.com', $name)->subject('Contact User Mail');
                    // $message->to('ersan.saini.gmail.com', $name)->subject('Contact User Mail');
                    
                     if (Str::contains($page_url, ['/geneva', '/geneva/'])) {
            $message->to('geneva@profoundrealtors.com', $name)->subject('Contact User Mail');
        }

            }); 


               $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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

                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            /* Send email end */

            // return redirect(url('thank-you'));

             // return view('frontend.thankYou');
            



            if($contact){

                // return response()->json([

                //     'success'   => true,

                //     'message'   =>'Thank you for filling out your information!'

                // ]);
                
                $url = $request->input('file_path');
    $fileName = basename(parse_url($url, PHP_URL_PATH)); // e.g., img_abc123.pdf

    try {
        $fileContent = file_get_contents($url);

        if ($fileContent === false) {
            return back()->with('error', 'Unable to fetch the file.');
        }

        return response($fileContent)
            ->header('Content-Type', 'application/octet-stream')
            ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"');
    } catch (\Exception $e) {
        return back()->with('error', 'Download failed: ' . $e->getMessage());
    }

            }else{

                return response()->json([

                    'success' => false,

                    'message'   =>'Failed, try again'

                ],401);

            }

    }
    public function sellHome(Request $request){
        
            // Get all incoming request data
            $requestData = $request->all();

            // Extract the URL from the request data and remove it from the data to be sent
            $url = 'https://crm.profoundrealtors.com/rest/1/'.env("bitrix24_api_key").'/';
            unset($requestData['kpi_link']);
            $title = 'WEBSITE Home LEAD FROM';
            // unset($requestData['TITLE']);
            // Prepare the data to be sent to the URL
            $requestDataToSend = [
                'fields' => array_merge($requestData, [
                    // Add the TITLE field
                    'TITLE' => "WEBSITE Home LEAD FROM",
                    // Add the EMAIL and PHONE fields if they exist in $requestData
                    'EMAIL' => isset($request->email) ? [['VALUE' => $request->email, 'VALUE_TYPE' => 'WORK']] : null,
                    'PHONE' => isset($request->phone) ? [['VALUE' => $request->phone, 'VALUE_TYPE' => 'WORK']] : null,
                    'COMMENTS' => $request->askAnything,
                    'UF_CRM_1718286070794' => url()->previous(),
                    'UF_CRM_1718286106153' => $request->propertyDetails
                ]),
                'params' => ['REGISTER_SONET_EVENT' => 'Y']
            ];


            $apiUrl = 'https://crm.profoundrealtors.com/rest/1/8a1j7lkicint8d19/';

            // Send a POST request to the provided URL
            $newUrl = $apiUrl . '/crm.lead.add.json?';
            $response = Http::withOptions(['verify' => false])
                            ->post($newUrl, $requestDataToSend);

            // Check if the request was successful (status code 2xx)
            // if ($response->successful()) {
            //     // Extract the ID from the response
            //     $responseData = $response->json();
            //     $leadID = $responseData['result'];
            //     // Return response with product ID
            //     return response()->json(['id' => $leadID], 201);
            // } else {
            //     // Log the error if the request was not successful
            //     \Log::error('Failed to add lead:', ['status_code' => $response->status(), 'response' => $response->json()]);
            //     return response()->json(['error' => 'Failed to add lead'], 500);
            // }
        // bitrix24
        
        
        

            $messages = [

                'email'=>'Email is Required',

                'phone'=>'Phone is Required',
                
                'askAnything'=>'Message is Required',

            ];

            $validator = Validator::make($request->all(), [

                'email'=>'required',

                'phone'=>'required',

                'askAnything'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());
            
            $page_url =url()->previous();
            $contact = new Contact;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            $contact->message = $request->askAnything;
            $contact->page_url = $page_url;

            $contact->save();

            $details = [

             'email' => $request->email,

             'phone' => $request->phone,

             'message' => $request->askAnything,
             
             'page_url' => $page_url,

            ];
            
            $details2 = [

             'email' => $request->email,

             'phone_number' => $request->phone,
             
             'message' => $request->askAnything,
             
             'form_type'     => 'Home form',
             
             'source' => 'Website',
             
             

            ];
            
            
            $url2 = 'https://dialer-profound.doocti.com/api?list_id=6&channel=lead&autoassign=true'; //sent url
                $headers_curl2  = [
                        'Content-Type: application/json',
                        'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbGllbnQiOiJBZG1pbiIsInRlbmFudF9pZCI6ImN0aV9kb29jdGl2Ml8yMDIyMDgyNiIsInNjb3BlIjoiYXBpLXYzIiwiaXNzIjoiaHR0cHM6Ly9saXZlLWRvb2N0aS5hdS5hdXRoMC5jb20vIiwic3ViIjoiejZMMzlyekRhZmtub0tucjVWUHloMU8zRW9aVUxGUGRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vcHJvZC1hcGkuZG9vY3RpLmNvbSIsImV4cCI6MTc2MTQ1NTg3MjQwNiwiaWF0IjoxNjk4Mjk3NDcyfQ.FbO-DKVzgnhstEaW98zMHBY4-XtVoOicxQNFn99uCmA'
                ];
                                                        
                $ch2 = curl_init();
                curl_setopt($ch2, CURLOPT_URL, $url2);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($details2));           
                curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers_curl2);
                $result2 = curl_exec($ch2);
                curl_close($ch2);
                

            

            /* Send email start */

            $email = $request->email;

            $name = 'Profound';

            $message = 'This email sent form Profound';

            Mail::send('frontend.emails.homeEnquireEmail', array('data' => $details), function($message) use($email,$name,$page_url  ) {

                    // $message->to('info@profoundrealtors.com', $name)->subject('Contact User Mail');
                    $message->to('enquiry@profoundrealtors.com', $name)->subject('Home Contact User Mail');
                    // $message->to('ersan.saini.gmail.com', $name)->subject('Contact User Mail');

            }); 


               $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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

                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            /* Send email end */

            return redirect(url('thank-you'));

             // return view('frontend.thankYou');
            



            if($contact){

                // return response()->json([

                //     'success'   => true,

                //     'message'   =>'Thank you for filling out your information!'

                // ]);
                

            }else{

                return response()->json([

                    'success' => false,

                    'message'   =>'Failed, try again'

                ],401);

            }

    }
    
    public function sellPdfForm2(Request $request){
        
            // Get all incoming request data
            $requestData = $request->all();

            // Extract the URL from the request data and remove it from the data to be sent
            $url = 'https://crm.profoundrealtors.com/rest/1/'.env("bitrix24_api_key").'/';
            unset($requestData['kpi_link']);
            $title = 'WEBSITE LEAD FROM';
            // unset($requestData['TITLE']);
            // Prepare the data to be sent to the URL
            $requestDataToSend = [
                'fields' => array_merge($requestData, [
                    // Add the TITLE field
                    'TITLE' => "WEBSITE LEAD FROM",
                    // Add the EMAIL and PHONE fields if they exist in $requestData
                    'NAME' => $request->name,
                    'EMAIL' => isset($request->email) ? [['VALUE' => $request->email, 'VALUE_TYPE' => 'WORK']] : null,
                    'PHONE' => isset($request->phone) ? [['VALUE' => $request->phone, 'VALUE_TYPE' => 'WORK']] : null,
                    'COMMENTS' => $request->message,
                    'UF_CRM_1718286070794' => url()->previous(),
                    'UF_CRM_1718286106153' => $request->propertyDetails
                ]),
                'params' => ['REGISTER_SONET_EVENT' => 'Y']
            ];


            $apiUrl = 'https://crm.profoundrealtors.com/rest/1/8a1j7lkicint8d19/';

            // Send a POST request to the provided URL
            $newUrl = $apiUrl . '/crm.lead.add.json?';
            $response = Http::withOptions(['verify' => false])
                            ->post($newUrl, $requestDataToSend);

            // Check if the request was successful (status code 2xx)
            // if ($response->successful()) {
            //     // Extract the ID from the response
            //     $responseData = $response->json();
            //     $leadID = $responseData['result'];
            //     // Return response with product ID
            //     return response()->json(['id' => $leadID], 201);
            // } else {
            //     // Log the error if the request was not successful
            //     \Log::error('Failed to add lead:', ['status_code' => $response->status(), 'response' => $response->json()]);
            //     return response()->json(['error' => 'Failed to add lead'], 500);
            // }
        // bitrix24
        
        
        

            $messages = [

                'name'=>'Name is Required',

                'email'=>'Email is Required',

                'phone'=>'Phone is Required',
                
                'message'=>'Message is Required',

            ];

            $validator = Validator::make($request->all(), [

                'name'=>'required',

                'email'=>'required',

                'phone'=>'required',

                'message'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());
            
            $page_url =url()->previous();
            $contact = new Contact;

            $contact->type = $request->type;

            $contact->name = $request->name;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            $contact->message = $request->message;
            $contact->page_url = $page_url;

            $contact->save();

            $details = [

             'name' =>  $request->name,

             'email' => $request->email,

             'phone' => $request->phone,

             'message' => $request->message,
             
             'page_url' => $page_url,

            ];
            
            $details2 = [

             'first_name' =>  $request->name,

             'email' => $request->email,

             'phone_number' => $request->phone,
             
             'message' => $request->message,
             
             'form_type'     => 'Popup Form',
             
             'source' => 'Website',
             
             

            ];
            
            
            $url2 = 'https://dialer-profound.doocti.com/api?list_id=6&channel=lead&autoassign=true'; //sent url
                $headers_curl2  = [
                        'Content-Type: application/json',
                        'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbGllbnQiOiJBZG1pbiIsInRlbmFudF9pZCI6ImN0aV9kb29jdGl2Ml8yMDIyMDgyNiIsInNjb3BlIjoiYXBpLXYzIiwiaXNzIjoiaHR0cHM6Ly9saXZlLWRvb2N0aS5hdS5hdXRoMC5jb20vIiwic3ViIjoiejZMMzlyekRhZmtub0tucjVWUHloMU8zRW9aVUxGUGRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vcHJvZC1hcGkuZG9vY3RpLmNvbSIsImV4cCI6MTc2MTQ1NTg3MjQwNiwiaWF0IjoxNjk4Mjk3NDcyfQ.FbO-DKVzgnhstEaW98zMHBY4-XtVoOicxQNFn99uCmA'
                ];
                                                        
                $ch2 = curl_init();
                curl_setopt($ch2, CURLOPT_URL, $url2);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($details2));           
                curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers_curl2);
                $result2 = curl_exec($ch2);
                curl_close($ch2);
                

            

            /* Send email start */

            $email = $request->email;

            $name = $request->name;

            $message = 'This email sent form Profound';

            Mail::send('frontend.emails.enquireMail', array('data' => $details), function($message) use($email,$name,$page_url  ) {

                    // $message->to('info@profoundrealtors.com', $name)->subject('Contact User Mail');
                    $message->to('enquiry@profoundrealtors.com', $name)->subject('Contact User Mail');
                    // $message->to('ersan.saini.gmail.com', $name)->subject('Contact User Mail');
                    
                     if (Str::contains($page_url, ['/geneva', '/geneva/'])) {
            $message->to('geneva@profoundrealtors.com', $name)->subject('Contact User Mail');
        }

            }); 


               $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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

                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            /* Send email end */

            // return redirect(url('thank-you'));

             // return view('frontend.thankYou');
            



            if($contact){

                // return response()->json([

                //     'success'   => true,

                //     'message'   =>'Thank you for filling out your information!'

                // ]);
                
               $url = $request->input('file_path');
    $fileName = basename(parse_url($url, PHP_URL_PATH)); // e.g., img_abc123.pdf

    try {
        $fileContent = file_get_contents($url);

        if ($fileContent === false) {
            return back()->with('error', 'Unable to fetch the file.');
        }

        return response($fileContent)
            ->header('Content-Type', 'application/octet-stream')
            ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"');
    } catch (\Exception $e) {
        return back()->with('error', 'Download failed: ' . $e->getMessage());
    }

            }else{

                return response()->json([

                    'success' => false,

                    'message'   =>'Failed, try again'

                ],401);

            }

    }
    
    
    public function sellPdfForm3(Request $request){
        
            // Get all incoming request data
            $requestData = $request->all();

            // Extract the URL from the request data and remove it from the data to be sent
            $url = 'https://crm.profoundrealtors.com/rest/1/'.env("bitrix24_api_key").'/';
            unset($requestData['kpi_link']);
            $title = 'WEBSITE LEAD FROM';
            // unset($requestData['TITLE']);
            // Prepare the data to be sent to the URL
            $requestDataToSend = [
                'fields' => array_merge($requestData, [
                    // Add the TITLE field
                    'TITLE' => "WEBSITE LEAD FROM",
                    // Add the EMAIL and PHONE fields if they exist in $requestData
                    'NAME' => $request->name,
                    'EMAIL' => isset($request->email) ? [['VALUE' => $request->email, 'VALUE_TYPE' => 'WORK']] : null,
                    'PHONE' => isset($request->phone) ? [['VALUE' => $request->phone, 'VALUE_TYPE' => 'WORK']] : null,
                    'COMMENTS' => $request->message,
                    'UF_CRM_1718286070794' => url()->previous(),
                    'UF_CRM_1718286106153' => $request->propertyDetails
                ]),
                'params' => ['REGISTER_SONET_EVENT' => 'Y']
            ];


            $apiUrl = 'https://crm.profoundrealtors.com/rest/1/8a1j7lkicint8d19/';

            // Send a POST request to the provided URL
            $newUrl = $apiUrl . '/crm.lead.add.json?';
            $response = Http::withOptions(['verify' => false])
                            ->post($newUrl, $requestDataToSend);

            // Check if the request was successful (status code 2xx)
            // if ($response->successful()) {
            //     // Extract the ID from the response
            //     $responseData = $response->json();
            //     $leadID = $responseData['result'];
            //     // Return response with product ID
            //     return response()->json(['id' => $leadID], 201);
            // } else {
            //     // Log the error if the request was not successful
            //     \Log::error('Failed to add lead:', ['status_code' => $response->status(), 'response' => $response->json()]);
            //     return response()->json(['error' => 'Failed to add lead'], 500);
            // }
        // bitrix24
        
        
        

            $messages = [

                'name'=>'Name is Required',

                'email'=>'Email is Required',

                'phone'=>'Phone is Required',
                
                'message'=>'Message is Required',

            ];

            $validator = Validator::make($request->all(), [

                'name'=>'required',

                'email'=>'required',

                'phone'=>'required',

                'message'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }

            //dd($request->all());
            
            $page_url =url()->previous();
            $contact = new Contact;

            $contact->type = $request->type;

            $contact->name = $request->name;

            $contact->email = $request->email;

            $contact->phone = $request->phone;

            $contact->message = $request->message;
            $contact->page_url = $page_url;

            $contact->save();

            $details = [

             'name' =>  $request->name,

             'email' => $request->email,

             'phone' => $request->phone,

             'message' => $request->message,
             
             'page_url' => $page_url,

            ];
            
            $details2 = [

             'first_name' =>  $request->name,

             'email' => $request->email,

             'phone_number' => $request->phone,
             
             'message' => $request->message,
             
             'form_type'     => 'Popup Form',
             
             'source' => 'Website',
             
             

            ];
            
            
            $url2 = 'https://dialer-profound.doocti.com/api?list_id=6&channel=lead&autoassign=true'; //sent url
                $headers_curl2  = [
                        'Content-Type: application/json',
                        'Authorization: Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJjbGllbnQiOiJBZG1pbiIsInRlbmFudF9pZCI6ImN0aV9kb29jdGl2Ml8yMDIyMDgyNiIsInNjb3BlIjoiYXBpLXYzIiwiaXNzIjoiaHR0cHM6Ly9saXZlLWRvb2N0aS5hdS5hdXRoMC5jb20vIiwic3ViIjoiejZMMzlyekRhZmtub0tucjVWUHloMU8zRW9aVUxGUGRAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vcHJvZC1hcGkuZG9vY3RpLmNvbSIsImV4cCI6MTc2MTQ1NTg3MjQwNiwiaWF0IjoxNjk4Mjk3NDcyfQ.FbO-DKVzgnhstEaW98zMHBY4-XtVoOicxQNFn99uCmA'
                ];
                                                        
                $ch2 = curl_init();
                curl_setopt($ch2, CURLOPT_URL, $url2);
                curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch2, CURLOPT_POSTFIELDS, json_encode($details2));           
                curl_setopt($ch2, CURLOPT_HTTPHEADER, $headers_curl2);
                $result2 = curl_exec($ch2);
                curl_close($ch2);
                

            

            /* Send email start */

            $email = $request->email;

            $name = $request->name;

            $message = 'This email sent form Profound';

            Mail::send('frontend.emails.enquireMail', array('data' => $details), function($message) use($email,$name,$page_url  ) {

                    // $message->to('info@profoundrealtors.com', $name)->subject('Contact User Mail');
                    $message->to('enquiry@profoundrealtors.com', $name)->subject('Contact User Mail');
                    // $message->to('ersan.saini.gmail.com', $name)->subject('Contact User Mail');
                    
                     if (Str::contains($page_url, ['/geneva', '/geneva/'])) {
            $message->to('geneva@profoundrealtors.com', $name)->subject('Contact User Mail');
        }

            }); 


               $url = 'https://hooks.zapier.com/hooks/catch/3658724/bjyuyd3/'; //sent url
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

                // $response = json_decode($result);
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }

            /* Send email end */

            // return redirect(url('thank-you'));

             // return view('frontend.thankYou');
            



            if($contact){

                // return response()->json([

                //     'success'   => true,

                //     'message'   =>'Thank you for filling out your information!'

                // ]);
                
               $url = $request->input('file_path');
    $fileName = basename(parse_url($url, PHP_URL_PATH)); // e.g., img_abc123.pdf

    try {
        $fileContent = file_get_contents($url);

        if ($fileContent === false) {
            return back()->with('error', 'Unable to fetch the file.');
        }

        return response($fileContent)
            ->header('Content-Type', 'application/octet-stream')
            ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"');
    } catch (\Exception $e) {
        return back()->with('error', 'Download failed: ' . $e->getMessage());
    }

            }else{

                return response()->json([

                    'success' => false,

                    'message'   =>'Failed, try again'

                ],401);

            }

    }

    public function formSubscribe(Request $request){

         $messages = [

                'subscrbEmail'=>'Email is Required',
            ];

            $validator = Validator::make($request->all(), [

                'subscrbEmail'=>'required',

              ],$messages);

            if ($validator->fails()) {

                return response()->json(['error'=>$validator->errors()], 401);

            }
            $page_url =url()->previous();
            $details = [
                'email'     =>  $request->subscrbEmail,
                'page_url'     =>  $page_url,
            ];

            $url = 'https://hooks.zapier.com/hooks/catch/3658724/bju7tyn/'; //sent url
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
                // if($response->status=='success'){ //status in response
                //     return redirect()->route('thankYou');
                // }
            

           if($response->status=='success'){

                return response()->json([

                    'success'   => true,

                    'message'   =>'Thank you for filling out your information!'

                ]);


            }else{

                return response()->json([

                    'success' => false,

                    'message'   =>'Failed, try again'

                ],401);

            }

    }
    

}





