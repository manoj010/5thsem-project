<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\VehicleModel;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function booking($id){
        $bike=VehicleModel::findOrFail($id);
        return view('booking',compact('bike'));
    }
    public function bookingSubmit(Request $request){
        Booking::create([
            'user_id'=>auth()->user()->id,
            'bike_id'=>$request->bike_id,
        ]);
        return back()->with('success','booking success');
    }
}
