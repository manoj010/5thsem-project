<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\VehicleController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ModelController;
use App\Http\Controllers\Backend\NewslettersController;
use App\Http\Controllers\Backend\ContactpageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Frontend\RatingController;
use App\Http\Controllers\Frontend\ReviewController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth','role:user')->group(function() {
    Route::get('/dashboard',[UserController::class,'UserDashboard'])->name('dashboard');
    Route::post('/user/profile/store',[UserController::class,'UserProfileStore'])->name('user.profile.store');
    Route::post('/user/password/update',[UserController::class,'UserPasswordUpdate'])->name('user.password.update');
    Route::get('/user/logout',[UserController::class,'UserLogout'])->name('user.logout');
    
    Route::post('/add/wishlist', [WishlistController::class, 'AddToWishlist'])->name('add.wishlist');
    Route::get('/wishlist',[WishlistController::class,'UserWishlist'])->name('wishlist');
    Route::get('/remove/wishlist/{id}',[WishlistController::class,'RemoveWishlist'])->name('wishlist.remove');
    Route::get('/booking/{id}',[BookingController::class,'booking'])->name('booking');
    Route::post('/booking-submit',[BookingController::class,'bookingSubmit'])->name('bookingSubmit');
    Route::get('/remove/booking/{id}',[BookingController::class,'RemoveBooking'])->name('remove.booking');
    //user only contact to admin 
    Route::post('/contact', [ContactpageController::class, 'contact'])->name('contact');
    Route::post('/add/rating', [RatingController::class, 'AddRating'])->name('add.rating');
    Route::get('/add-review/{model_slug}', [ReviewController::class, 'AddReview'])->name('add.review');
    Route::post('/post-review', [ReviewController::class, 'PostReview'])->name('post.review');
    Route::get('/edit-review/{id}/{model_slug}', [ReviewController::class, 'EditReview'])->name('edit.review');
    Route::post('/update/review', [ReviewController::class, 'UpdateReview'])->name('update.review');
});


Route::controller('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth','role:admin')->group(function() {
    Route::get('/admin/dashboard',[AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile',[AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store',[AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/setting',[AdminController::class, 'AdminSetting'])->name('admin.setting');
    Route::get('/admin/change/password',[AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/password/update',[AdminController::class, 'AdminPasswordUpdate'])->name('password.update');
    Route::get('all-bookings',[AdminController::class,'showBookings'])->name('showBookings');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->middleware(RedirectIfAuthenticated::class);
Route::get('/become/admin',[AdminController::class, 'BecomeAdmin'])->name('become.admin');
Route::post('/admin/register',[AdminController::class, 'AdminRegister'])->name('admin.register');

Route::middleware('auth','role:admin')->group(function() {
    
    Route::controller(BrandController::class)->group(function(){
        
        Route::get('/all/brand','AllBrand')->name('all.brand'); 
        Route::get('/add/brand','AddBrand')->name('add.brand');
        Route::post('/store/brand','StoreBrand')->name('store.brand');
        Route::get('/edit/brand/{id}','EditBrand')->name('edit.brand');
        Route::post('/update/brand','UpdateBrand')->name('update.brand');
        Route::get('/delete/brand/{id}','DeleteBrand')->name('delete.brand');
        
    });

    Route::controller(VehicleController::class)->group(function(){
        
        Route::get('/all/vehicle','AllVehicle')->name('all.vehicle');
        Route::get('/add/vehicle','AddVehicle')->name('add.vehicle');
        Route::post('/store/vehicle','StoreVehicle')->name('store.vehicle');
        Route::get('/edit/vehicle/{id}','EditVehicle')->name('edit.vehicle');
        Route::post('update/vehicle','UpdateVehicle')->name('update.vehicle');
        Route::get('/delete/vehicle/{id}','DeleteVehicle')->name('delete.vehicle');

    });

    Route::controller(CategoryController::class)->group(function(){
       
        Route::get('/all/category','AllCategory')->name('all.category');
        Route::get('/add/category','AddCategory')->name('add.category');
        Route::post('/store/category','StoreCategory')->name('store.category');
        Route::get('/edit/category/{id}','EditCategory')->name('edit.category');
        Route::post('/update/category','UpdateCategory')->name('update.category');
        Route::get('/delete/category/{id}','DeleteCategory')->name('delete.category');
        
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
});


Route::get('/model/details/{id}/{slug}',[IndexController::class,'ModelDetails'])->name('model.details');
Route::get('/contact',[IndexController::class,'ContactAdmin'])->name('contact.admin');
Route::get('/vehicle/{id}/{slug}',[IndexController::class,'CategoryBike']);
Route::get('/all/brand/show',[IndexController::class,'AllBrandShow'])->name('all.brand.show');


Route::post('/newslettersmail', [NewslettersController::class, 'newslettersmail'])->name('newslettersmail');

Route::get('/compare', [IndexController::class, 'Compare'])->name('compare');



Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'Master')->name('main');
    Route::post('/search','ModelSearch')->name('model.search');
    Route::get('/models-list', 'SearchModels');
    Route::post('/compare/models', 'CompareModel')->name('compare.models');
    
});