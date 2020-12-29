<?php

use App\Http\Controllers\UserController;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('welcome',function (){
    return view('welcome');
})->name('welcome');

Route::get('/',function (){
   return view('frontend.index');
})->name('home');

Route::get('/user/logout',[UserController::class,'logout'])->name('user.logout');



Route::get('admin',function (){
    return view('admin.layouts.master');
})->name('admin.index');

Route::get('admin/member',[UserController::class,'index'])->name('admin.member.index');
