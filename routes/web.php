<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    OutletController,
    PaketController,
    MemberController,
};
use App\Models\outlet;

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
    return view('home');
});

Route::get('admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::resource('dashboard', DashboardController::class);

Route::resource('outlet', OutletController::class);
Route::get('/outlet',[OutletController::class, 'index'])->name('outlet.index');
Route::post('/outlet/update', [OutletController::class, 'update']);
Route::post('/outlet/destroy/{id}', [OutletController::class, 'destroy']);

Route::get('/paket', [PaketController::class, 'index'])->name('paket.index');
Route::post('/paket/update', [PaketController::class, 'update'])->name('paket.update');
Route::post('/paket/store', [PaketController::class, 'store'])->name('paket.store');
Route::post('/paket/destroy/{id}', [PaketController::class, 'destroy']);
// Route::resource('/paket', PaketController::class);

Route::get('/member', [MemberController::class, 'index'])->name('member.index');
Route::post('/member/update', [MemberController::class, 'update']);
Route::post('/member/destroy/{id}', [MemberController::class, 'destroy']);
Route::resource('member', MemberController::class);