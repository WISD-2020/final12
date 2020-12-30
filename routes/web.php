<?php

use App\Http\Controllers\CostController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\RepairController;
use App\Http\Controllers\RoomController;
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

/*首頁*/
Route::get('/',function (){
   return view('frontend.index');
})->name('home');;
/*房型說明*/
Route::get('room',[RoomController::class,'index'])->name('room.index');

/*身分別判斷*/
Route::get('home',[UserController::class,'home'])->name('user.home');

/*房客頁面*/
Route::group(['middleware' => 'auth'],function (){
    Route::get('tenant',function (){
        return view('tenant.index');
    })->name('tenant.index');

    Route::get('cost',[CostController::class,'index'])->name('cost.index');
    Route::get('mail',[MailController::class,'index'])->name('mail.index');
    Route::get('repair',[RepairController::class,'index'])->name('repair.index');
});


/*Route::get('tenant',function (){
    return view('tenant.index');
})->middleware('auth')->name('tenant.index');*/

Route::get('/user/logout',[UserController::class,'logout'])->name('user.logout');



Route::get('admin',function (){
    return view('admin.layouts.master');
})->name('admin.index');

Route::get('admin/member',[UserController::class,'index'])->name('admin.member.index');

