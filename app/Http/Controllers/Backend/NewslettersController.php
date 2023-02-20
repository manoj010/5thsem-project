<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletters;

class NewslettersController extends Controller
{
    public function Newsletters(){
        $emails = Newsletters::latest()->get();
        return view('Backend.Newsletters.newsletters',compact('emails'));
    }

    
}
