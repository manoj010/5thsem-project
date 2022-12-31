<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{

    //Admin Dashboard
    public function AdminDashboard() {
        return view('admin.index');
    }


    //Admin Logout 
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    //Admin Login page
    public function AdminLogin() {
        return view('admin.admin_login');
    }


    //Admin Profile Update
    public function AdminProfile() {
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }

    //Admin Profile Store
    public function AdminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data= User::find($id);
        
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/adminImages/'.$data->photo));
            $filename = date('sds').$file->getClientOriginalName();
            $file->move(public_path('upload/adminImages'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back();
        
    }

    //Admin Setting 

    public function AdminSetting(){
        return view('admin.admin_setting');
    }

    //Admin Password Change
    public function AdminChangePassword(){
        return view('admin.admin_change_password');
    }

    
}