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

    });
    

    Route::controller(ModelController::class)->group(function(){
       
        Route::get('/all/model','AllModel')->name('all.model');
        Route::get('/add/model','AddModel')->name('add.model');
        Route::post('/store/model','StoreModel')->name('store.model');
        Route::get('/edit/model/{id}','EditModel')->name('edit.model');
        Route::post('/update/model/','UpdateModel')->name('update.model');
        Route::post('/update/model/img','UpdateModelImg')->name('update.model.img');
        Route::post('/update/model/multiimg','UpdateModelMultiImg')->name('update.model.multiimg');
        Route::get('/multi/img/delete/{id}','MultiImgDelete')->name('multi.img.delete');
        Route::get('/model/inactive/{id}','ModelInactive')->name('model.inactive');
        Route::get('/model/active/{id}','ModelActive')->name('model.active');
        Route::get('/delete/model/{id}','DeleteModel')->name('delete.model');
        
    });

    Route::controller(NewslettersController::class)->group(function(){
        Route::get('/newsletters','newsletters')->name('newsletters');
        Route::get('/delete/{id}','deleteEmail');
    });

    Route::controller(ContactpageController::class)->group(function(){
        Route::get('/contactpage','contactpage')->name('contactpage');
        Route::get('/delete/{id}','deleteContactinfo');
    });
    
    Route::controller(BookingController::class)->group(function(){
        Route::get('all-bookings','showBookings')->name('showBookings');
        Route::get('/verify/booking/{id}','BookingVerify')->name('booking.verify');
        Route::get('/remove/verify/booking/{id}','RemoveVerify')->name('remove.verify');
    });
    
    Route::get('/all/users',[AdminController::class,'AllUsers'])->name('all.users');
    Route::get('/all/admins',[AdminController::class,'allAdmins'])->name('all.admins');
});





Route::post('/newslettersmail', [NewslettersController::class, 'newslettersmail'])->name('newslettersmail');





Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'Master')->name('main');
    Route::get('/compare', 'Compare')->name('compare');
    Route::post('/compare/models', 'CompareModel')->name('compare.models');
    Route::post('/search','ModelSearch')->name('model.search');
    Route::get('/models-list', 'SearchModels');
    Route::get('/brand/{id}/{slug}', 'BrandModel')->name('brand.model');

    //
    Route::get('/model/details/{id}/{slug}','ModelDetails')->name('model.details');
    Route::get('/contact','ContactAdmin')->name('contact.admin');
    Route::get('/vehicle/{id}/{slug}','CategoryBike');
    Route::get('/all/brand/show','AllBrandShow')->name('all.brand.show');
    
});


Route::controller(TestRideController::class)->group(function(){
    Route::get('/test/ride','TestRide')->name('test.ride');
    Route::post('/add/test/ride','AddTestRide')->name('add.test.ride');
    
});

Route::controller(FilterController::class)->group(function(){
    Route::get('/all/filter/bikes&scooters','FilterBikesAndScooters')->name('all.filter.bikes&scooters');
    Route::post('/all/filter/','AllFilter')->name('all.filter');
    
});

