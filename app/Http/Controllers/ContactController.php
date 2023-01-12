<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Symfony\Component\Finder\name;

class ContactController extends Controller
{
    public function sendCont(Request $request){
        $this->validate($request,[
            'name'=>'required|max:200',
            'email'=>'required|email|max:200',
            'description'=>'required|min:100',
        ]);

        $contact = Contact::create($request->all());
        Session::flash('message-send', 'Thanks for contacting me. I will get back to you soon.');
        return redirect()->back();



    }
}
