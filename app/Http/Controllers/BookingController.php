<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\VehicleModel;
use Illuminate\Http\Request;
use App\Models\User;

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
        $notification = array(
            'message' => 'Booking Success',
            'alert-type' => 'success'
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function RemoveBooking($id){
        Booking::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Booking Remove Success',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    
    public function showBookings(){
        $bookings = Booking::with('rBike')->with('rUser')->get();
        return view('Backend.bookings',compact('bookings'));
    }
    

    public function BookingVerify($id){

        Booking::findOrFail($id)->update(['status'=>'1']);

        $notification = array(
            'message' => 'Booking Verify Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function RemoveVerify($id){
        $booking_id = Booking::findOrFail($id)->update(['status'=>'0']); 

        $notification = array(
            'message' => 'Remove Verify Booking Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    
}