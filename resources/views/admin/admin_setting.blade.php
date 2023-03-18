
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
=======
@extends('admin.admin_dashboard')
@section('content')

<div class="breadcrumbs mt-5">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Admin Settings</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Settings</strong>
                    </div>
                    <div class="card-body">
                    <a href="{{route('become.admin')}}">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">Register Admin</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa fa-user"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('admin.change.password')}}">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">Change Password</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa-solid fa-key"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                   <a href="">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">Forget Password</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa-sharp fa-solid fa-unlock"></i></div>
                                </div>
                            </div>
                        </div>
                    </a> 
                    <a href="{{route('all.admins')}}">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">View All Admin</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa fa-user"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{route('admin.logout')}}">
                        <div class="form-group my-4">
                            <div class="input-group">
                                <div class="input-group-addon px-4 mr-1" style="width: 200px;">Logout</div>
                                <div class="text-center">
                                    <div class="btn btn-success"><i class="fa-sharp fa-solid fa-unlock"></i></div>
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

