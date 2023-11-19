<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
public function contact(){
 return view('/contact');
}

    public function storeservice(Request $request)
    {
        $contact = new ContactForm;
        $contact->name = $request['name'];
        $contact->email = $request['email'];
        $contact->subject = $request['subject'];
        $contact->message = $request['message'];
        $contact->save();
    
        // Additional logic or redirect here
    
        return view('contact')->with('success', 'Data inserted successfully.');
    }

    public function viewContact(){

        $contact = ContactForm::all();
        return view('Admin.contact-us',compact('contact'));
    }

    public function deleteContact($id){

        $contact = ContactForm::find($id);
    
        $contact->delete();
        if($contact){
           return redirect()->back()->with("Data deleted successfuly");
        }
        else{
            return "Data not found";
            }
    }
}
