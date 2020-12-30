<?php
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


Route::get('home',[UserController::class,'home'])->name('user.home');
Route::get('tenant',function (){
    return view('tenant.index');
})->name('tenant.index');

Route::get('/user/logout',[UserController::class,'logout'])->name('user.logout');




Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {
            Route::get('/',function (){
                return view('admin.layouts.master');
                })->name('admin.index');
            Route::get('/member',[UserController::class,'index'])
                ->name('admin.member.index');
        });

    });



