<?php

use App\Http\Controllers\Danhmucloaicay;
use App\Http\Controllers\TaikhoanController;
use App\Http\Controllers\CaytrongController;
use App\Http\Controllers\QuyenController;
use App\Http\Controllers\KhuController;
use App\Http\Controllers\OcaytrongController;
use App\Http\Controllers\LichphunthuocController;
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
    return view('welcome');
});


Route::get('/home', function () {
    return view('home');
});

// danhmucloaicay
Route::get('/danhmucloaicay',[Danhmucloaicay::class,'index'])->name('admin.danhmucloaicay');
Route::get('/danhmucloaicay/create',[Danhmucloaicay::class,'create'])->name('danhmuc.create');
Route::post('/danhmucloaicay/store',[Danhmucloaicay::class,'store'])->name('danhmuc.store');
Route::get('/danhmucloaicay/edit/{id}',[Danhmucloaicay::class,'edit'])->name('danhmuc.edit');
Route::post('/danhmucloaicay/update/{danhmucloaicay}',[Danhmucloaicay::class,'update'])->name('danhmuc.update');
Route::get('/danhmucloaicay/destroy/{id}',[Danhmucloaicay::class,'destroy'])->name('danhmuc.destroy');

// taikhoan
Route::get('/taikhoan',[TaikhoanController::class,'index'])->name('admin.taikhoan');
Route::get('/taikhoan/create',[TaikhoanController::class,'create'])->name('tk.create');
Route::post('/taikhoan/store',[TaikhoanController::class,'store'])->name('tk.store');
Route::get('/taikhoan/edit/{id}',[TaikhoanController::class,'edit'])->name('tk.edit');
Route::post('/taikhoan/update/{taikhoan}',[TaikhoanController::class,'update'])->name('tk.update');
Route::get('/taikhoan/destroy/{id}',[TaikhoanController::class,'destroy'])->name('tk.destroy');




// caytrong
Route::get('/caytrong',[CaytrongController::class,'index'])->name('admin.caytrong');
Route::get('/caytrong/create',[CaytrongController::class,'create'])->name('ct.create');
Route::post('/caytrong/store',[CaytrongController::class,'store'])->name('ct.store');
Route::get('/caytrong/edit/{id}',[CaytrongController::class,'edit'])->name('ct.edit');
Route::post('/caytrong/update/{caytrong}',[CaytrongController::class,'update'])->name('ct.update');
Route::get('/caytrong/destroy/{id}',[CaytrongController::class,'destroy'])->name('ct.destroy');



// quyen
Route::get('/quyen',[QuyenController::class,'index'])->name('admin.quyen');
Route::get('/quyen/create',[QuyenController::class,'create'])->name('q.create');
Route::post('/quyen/store',[QuyenController::class,'store'])->name('q.store');
Route::get('/quyen/edit/{id}',[QuyenController::class,'edit'])->name('q.edit');
Route::post('/quyen/update/{quyen}',[QuyenController::class,'update'])->name('q.update');
Route::get('/quyen/destroy/{id}',[QuyenController::class,'destroy'])->name('q.destroy');


// khucaytrong
Route::get('/khu',[KhuController::class,'index'])->name('admin.khu');
Route::get('/khu/create',[KhuController::class,'create'])->name('k.create');
Route::post('/khu/store',[KhuController::class,'store'])->name('k.store');
Route::get('/khu/edit/{id}',[KhuController::class,'edit'])->name('k.edit');
Route::post('/khu/update/{khu}',[KhuController::class,'update'])->name('k.update');
Route::get('/khu/destroy/{id}',[KhuController::class,'destroy'])->name('k.destroy');


// Ô cây trồng
// Route::get('/ocaytrong',[OcaytrongController::class,'index'])->name('admin.ocaytrong');
// Route::get('/ocaytrong/create',[OcaytrongController::class,'create'])->name('ocay.create');
// Route::post('/ocaytrong/store',[OcaytrongController::class,'store'])->name('ocay.store');
// Route::get('/ocaytrong/edit/{id}',[OcaytrongController::class,'edit'])->name('ocay.edit');
// Route::post('/ocaytrong/update/{ocaytrong}',[OcaytrongController::class,'update'])->name('ocay.update');
// Route::get('/ocaytrong/destroy/{id}',[OcaytrongController::class,'destroy'])->name('ocay.destroy');

// lịch phun thuốc
// Route::get('/lichphunthuoc',[LichphunthuocController::class,'index'])->name('admin.lichphunthuoc');
// Route::get('/lichphunthuoc/create',[LichphunthuocController::class,'create'])->name('lich.create');
// Route::post('/lichphunthuoc/store',[LichphunthuocController::class,'store'])->name('lich.store');
// Route::get('/lichphunthuoc/edit/{id}',[LichphunthuocController::class,'edit'])->name('lich.edit');
// Route::post('/lichphunthuoc/update/{lichphunthuoc}',[LichphunthuocController::class,'update'])->name('lich.update');