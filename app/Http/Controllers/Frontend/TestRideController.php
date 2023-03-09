<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestRideController extends Controller
{
    public function TestRide(){
        return view('frontend.index.testRide.test_ride');
    }
}