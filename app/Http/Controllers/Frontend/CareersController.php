<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Careers;
use App\Models\Contact;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Redirect;
use PDF;
use Mail;
class CareersController extends Controller {
    public function __construct() {
    }
    
     public function index(Request $request){
         
          $careers = Careers::latest()->paginate(20);
          return view('admin.careers.index',compact('careers'));

    }
    
    public function add(Request $request) {
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'file' => 'max:10240',
            ]);
            if ($validator->fails()) {
                 return redirect()->route('careers')->with('error','Please fill all required fields...!');
            }

            $careers = new Careers;
            $careers->name = $request->name;
            $careers->email = $request->email;
            $careers->phone = $request->phone;
            if ($request->hasFile('cv')) {
                $cv = $request->file('cv');
                $file_name = 'img_' . time() . '.' . $cv->getClientOriginalExtension();
                $destinationPath = public_path('frontend/assets/images/cv/');
                if (!File::exists($destinationPath)) {
                    File::makeDirectory($destinationPath);
                }
                $cv->move($destinationPath, $file_name);
                $careers->cv = 'frontend/assets/images/cv/' . $file_name;
            }
            $careers->save();
            $details = [
            'name' =>  $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            ];
            
            $files = [
              public_path('frontend/assets/images/cv/'. $file_name),
            ];
            
            Mail::send('frontend.emails.careersMail',$details, 
            function($message)use($details, $files) {
            $message->to('info@homeland.ae')
                    ->subject('career email');
            foreach ($files as $file){
                $message->attach($file);
            }
            
          });
        
        
   
            // \Mail::to('deepakmauryacs16@gmail.com')->send(new \App\Mail\CareersMail($details));
            return redirect()->route('careers')->with('success','Thank you for filling out your information..!');
         
    }
    
      public function add_contact(Request $request) {
          
            $validator = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'message' => 'required',
            ]);
            if ($validator->fails()) {
                 return redirect()->route('contact-us')->with('error','Please fill all required fields...!');
            }
            $contact = new Contact;
            $contact->name = $request->name;
            $contact->email = $request->email;
            $contact->phone = $request->phone;
            $contact->message = $request->message;
            $contact->page_url = $request->message;
            
            $details = [
             'name' =>  $request->name,
             'email' => $request->email,
             'phone' => $request->phone,
             'message' => $request->message,
            ];
            \Mail::to('info@homeland.ae')->send(new \App\Mail\ContactMail($details));
            
            $contact->save();
             if($contact->save()) {
                $result['status'] = 1;
                $result['message'] = 'Thank you for contacting us ...!';
             }
            echo json_encode($result);
            die;
        
    }
 
//  info@homeland.ae

}
