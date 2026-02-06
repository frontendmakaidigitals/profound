<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller {
    public function __construct() {
    }
    
    public function index(Request $request){
          $contact = Contact::latest()->get();
          return view('admin.contact.index',compact('contact'));
    }
    public function deleteContact(Request $request){
       $array = explode(',', $request->id);
      
       foreach($array as $id){
           $contact = Contact::find($id);
            $contact->delete();
       }
          return redirect()->back()->with('success', 'data deleted successfully');
    }
    
    public function delete(Request $request, $id) {
        if (Contact::find($id)) {
            $contact = Contact::find($id);
            $contact->delete();
            return redirect()->back()->with('success', 'data deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Faield');
        }
    }
}
