
<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Category;

class CategoryController extends Controller
{
    public function AllCategory(){
        $categories = Category::latest()->get();
        return view('Backend.Category.all_category',compact('categories'));
    }

    public function AddCategory(){
        $vehicles = Vehicle::orderBy('vehicle_name','ASC')->get();
        return view('Backend.Category.add_category',compact('vehicles'));
    }

    public function StoreCategory(Request $request){
        Category::insert([
           'vehicle_id'=>$request->vehicle_name, 
           'category_name'=>$request->category_name,
           'category_slug'=>strtolower(str_replace(' ','-',$request->category_name)),
        ]);
=======
@extends('admin.admin_dashboard')
@section('content')
<div class="page-content">
    <div class="breadcrumbs mt-5">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>Admin Profile</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="container content">
        <div class="main-body">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{(!empty($adminData->photo))?url('upload/adminImages/'.$adminData->photo):url('upload/NoImage.jpg')}}"
                                    alt="Admin" style="width:150px; height:150px">
                                <div class="mt-3">
                                    <h4 class="mb-2">{{$adminData->name}}</h4>
                                    <p class="text-muted font-size-sm">{{$adminData->address}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{route('admin.profile.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="name" class="form-control"
                                            value="{{$adminData->name}}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">User Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" class="form-control" value="{{$adminData->username}}"
                                            disabled />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="email" name="email" class="form-control"
                                            value="{{$adminData->email}}" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="text" name="phone" class="form-control"
                                            value="{{$adminData->phone}}" />
                                    </div>
                                </div>


        
        $notification = array(
            'message' => 'Vehicle Category Inserted Successfully',
            'alert-type'=> 'success' 
        );
        
        return redirect()->route('all.category')->with($notification);
    }

    public function EditCategory($id){
        $vehicles = Vehicle::orderBy('vehicle_name','ASC')->get();
        $category = Category::find($id);
        return view('Backend.Category.edit_category',compact('vehicles','category'));
    }

    public function UpdateCategory(Request $request){
        $category_id = $request->id;
        
        Category::find($category_id)->update([
            'vehicle_id' => $request->vehicle_name,
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ','-',$request->category_name)),
        ]);

        $notification = array (
          'message' => 'Category Updated Successfully',
          'alert-type' => 'success'  
        );

        return redirect()->route('all.category')->with($notification);
    }

    public function DeleteCategory($id){
        Category::find($id)->delete();
        $notification = array (
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'  
          );
  
          return redirect()->back()->with($notification);
    }
}