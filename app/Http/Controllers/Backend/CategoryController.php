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
            'message'=>"Category Inserted Successfully",
            'alert-type'=>"success",
        );
        
        return redirect()->route('all.category')->with('$notification');
    }
}