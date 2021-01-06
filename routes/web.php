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
Route::get('/', function () {
    return view('frontend.index');
})->name('home');
/*房型說明*/
Route::get('room', [RoomController::class, 'index'])->name('room.index');
/*費用說明*/
Route::get('costdes', [CostController::class, 'costdes'])->name('costdes.index');

/*身分別判斷*/
Route::get('home', [UserController::class, 'home'])->name('user.home');

/*房客頁面*/
Route::group(['middleware' => 'auth'], function () {
    Route::get('tenant', function () {
        return view('tenant.index');
    })->name('tenant.index');

    Route::get('cost', [CostController::class, 'index'])->name('cost.index');
    Route::get('mail', [MailController::class, 'index'])->name('mail.index');
    Route::get('users_show',[UserController::class,'show'])->name('users_show.index');
    /*房客修繕回報*/
    Route::get('repair', [RepairController::class, 'index'])->name('repair.index');
    Route::get('repair/create',[RepairController::class,'create'])->name('repair.create');
    Route::post('repair/store',[RepairController::class,'store'])->name('repair.store');
    Route::get('repair/{id}/edit',[RepairController::class,'edit'])->name('repair.edit');
    Route::patch('repair/{id}',[RepairController::class,'update'])->name('repair.update');
    Route::delete('repair/{id}',[RepairController::class,'destroy'])->name('repair.destroy');
});


/*Route::get('tenant',function (){

    return view('tenant.index');
})->middleware('auth')->name('tenant.index');*/

Route::get('logout', [UserController::class, 'logout'])->name('logout');

/*管理員*/
Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', function () {
            return view('admin.index');
        })->name('admin.index');

        /*修繕回報管理*/
        Route::get('/repairs', [RepairController::class, 'admin_index'])
            ->name('admin.repairs.index');
        Route::get('/repair/{id}', [RepairController::class, 'admin_edit'])
            ->name('admin.repair.edit');
        Route::patch('/repair/{id}/update', [RepairController::class, 'admin_update'])
            ->name('admin.repair.update');
        Route::delete('/repair/{id}}', [RepairController::class, 'admin_destroy'])
            ->name('admin.repair.destroy');

        /*信件管理*/
        Route::get('/mails', [MailController::class, 'admin_index'])
            ->name('admin.mails.index');
        Route::post('/mail/create', [MailController::class, 'create'])
            ->name('admin.mail.create');
        Route::post('/mail/store', [MailController::class, 'store'])
            ->name('admin.mail.store');
        Route::get('/mail/{id}', [MailController::class, 'edit'])
            ->name('admin.mail.edit');
        Route::patch('/mail/{id}/update', [MailController::class, 'update'])
            ->name('admin.mail.update');
        Route::delete('/mail/{id}}', [MailController::class, 'destroy'])
            ->name('admin.mail.destroy');

        /*費用管理*/
        Route::get('/cost', [CostController::class, 'admin_index'])
            ->name('admin.cost.index');
        Route::post('/cost/create', [CostController::class, 'create'])
            ->name('admin.cost.create');
        Route::post('/cost/store', [CostController::class, 'store'])
            ->name('admin.cost.store');
        Route::get('cost/{id}', [CostController::class, 'edit'])
            ->name('admin.cost.edit');
        Route::patch('cost/{id}/update', [CostController::class, 'update'])
            ->name('admin.cost.update');
        Route::delete('cost/{id}', [CostController::class, 'destroy'])
            ->name('admin.cost.destroy');

        /*會員管理*/
        Route::get('/member', [UserController::class, 'index'])
            ->name('admin.member.index');
        Route::get('/member/create', [UserController::class, 'create'])
            ->name('admin.member.create');
        Route::post('/member/store', [UserController::class, 'store'])
            ->name('admin.member.store');
        Route::get('/member/{id}/edit', [UserController::class, 'edit'])
            ->name('admin.member.edit');
        Route::patch('/member/{id}', [UserController::class, 'update'])
            ->name('admin.member.update');
        Route::delete('/member/{id}', [UserController::class, 'destroy'])
            ->name('admin.member.destroy');
    });
});









