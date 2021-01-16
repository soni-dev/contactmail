<?php

namespace Soni\ContactEmail\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Soni\ContactEmail\Mail\ContactMailable;
use Mail;
use Soni\ContactEmail\Model\Contact;
class ContactFormController extends Controller
{
  public function contactForm(){
  	return view("contactemail::contactform");
  }
public function saveContactForm(Request $request){
   Contact::create($request->all());
	Mail::to(config("contactemail.send_email_to"))->send(new ContactMailable($request->message,$request->name));
	//Mail::to($request->email)->send(new ContactMailable($request->message,$request->name));
  	return redirect()->back()->with("success","mail send successfully");
  }

}
