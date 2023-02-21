<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactpage;

class ContactpageController extends Controller
{
    public function Contactpage(){
        return view('Backend.Contacts.contactpage');
    }

    public function contact(Request $req) {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contactpage::create([
            'name' => $req->name,
            'email' => $req->email,
            'subject' => $req->subject,
            'message' => $req->message
        ]);

        $notification = array(
            'message' => 'Message Sent Successfully',
            'alert-type'=> 'success' 
        );
        
        return back()->with($notification);
    }
}
