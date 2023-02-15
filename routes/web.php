<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Backend\BrandController;
use App\Http\Controllers\Backend\VehicleController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ModelController;
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

Route::get('/', function () {
    return view('frontend.index');
});

Route::middleware('auth')->group(function(){
    Route::get('/dashboard',[UserController::class,'UserDashboard'])->name('dashboard');
    Route::post('/user/profile/store',[UserController::class,'UserProfileStore'])->name('user.profile.store');
    Route::post('/user/password/update',[UserController::class,'UserPasswordUpdate'])->name('user.password.update');
    Route::get('/user/logout',[UserController::class,'UserLogout'])->name('user.logout');
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
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin']);
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
        
    });
});