<?php

namespace DevpremierInfotech\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Devpremier\Contact\Models\Contact;
use Devpremier\Contact\Mail\ContactQueryMail;

class ContactController extends Controller
{
   public function index(){
      return view('contact::contact');
   }

   public function send(Request $request){
      Contact::create($request->all());
      Mail::to(config('contact.send_email_to'))->send(new ContactQueryMail($request->all()));
      return back();
   }
}
