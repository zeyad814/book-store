<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\auth_controller;
use App\Http\Controllers\front\homecontroller;
use App\Http\Controllers\front\branchController;
use App\Http\Controllers\front\contactController;
use App\Http\Controllers\front\productController;
use App\Http\Controllers\front\cartController;
use App\Http\Controllers\front\wishlistController;
use App\Http\Controllers\admin\orderAdminController;
use App\Http\Controllers\admin\admin_home_controller;
use App\Http\Controllers\admin\contactAdminController;
use App\Http\Controllers\admin\productAdminController;
use App\Http\Controllers\admin\categoryAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[homecontroller::class ,'index'])->name('front.pages.home.index');
Route::get('/we',[homecontroller::class ,'WE'])->name('we');
Route::get('/replacement',[homecontroller::class ,'replacementPolicies'])->name('replacementPolicies');
Route::get('/private',[homecontroller::class ,'privatetPolicies'])->name('privatePolicies');
Route::get('/',[homecontroller::class ,'index'])->name('front.pages.home.index');
// Route::get('/login',[auth_controller::class ,'login'])->name('login');
Route::get('/login',[auth_controller::class ,'login'])->name('login');
// Route::get('/api/test',[auth_controller::class ,'api']);
Route::get('/register',[auth_controller::class ,'register'])->name('register');
Route::post('/submitRegister',[auth_controller::class ,'submitRegister'])->name('submitRegister');
Route::post('/submitLogin',[auth_controller::class ,'submitLogin'])->name('submitLogin');
Route::get('/logout',[auth_controller::class ,'logout'])->name('logout');
Route::get('/addWishlist/{id}',[wishlistController::class ,'store'])->name('add_to_wishlist');
Route::get('/delete-Wishlist/{id}',[wishlistController::class ,'destroy'])->name('deleteWishlist');
Route::get('/wishlist',[wishlistController::class ,'index'])->name('wishlist');
Route::get('/branches',[branchController::class ,'index'])->name('branches');
Route::get('/Allproducts/{id?}',[productController::class ,'index'])->name('allproducts');
Route::get('/showproduct/{id}',[productController::class ,'show'])->name('showproduct');
Route::get('/contacts',[contactController::class ,'index'])->name('contacts');



Route::get('/admin_home',[admin_home_controller::class ,'index'])->name('admin_home');
Route::get('/admin_product',[productAdminController::class ,'index'])->name('admin_product');
Route::get('/admin_order',[orderAdminController::class ,'index'])->name('admin_order');
Route::get('/admin_contact',[contactAdminController::class ,'index'])->name('admin_contact');
Route::post('/confirm_contact/{id}',[contactAdminController::class ,'deleteContact'])->name('confirm_contact');
Route::get('/add_product',[productAdminController::class ,'addProduct'])->name('add_product');
Route::get('/update_product/{id}',[productAdminController::class ,'updateProduct'])->name('update_product');
Route::post('/submit_update_product/{id}',[productAdminController::class ,'submitUpdateProduct'])->name('submit_update_product');
Route::delete('/delete_product/{id}',[productAdminController::class ,'deleteProduct'])->name('delete_product');
Route::post('/submit_product',[productAdminController::class ,'submitProduct'])->name('submit_product');
Route::get('/admin_category',[categoryAdminController::class ,'index'])->name('admin_category');
Route::get('/Add_category',[categoryAdminController::class ,'addCategory'])->name('add_category');
Route::post('/submit_category',[categoryAdminController::class ,'submit_category'])->name('submit_category');
Route::delete('/delete_category/{id}',[categoryAdminController::class ,'deleteCategory'])->name('delete_category');
Route::post('/cart/add-to-cart/{id}',[cartController::class , 'store'])->name('cartStore');
