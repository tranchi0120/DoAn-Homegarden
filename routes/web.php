<?php

use App\Http\Controllers\Danhmucloaicay;
use App\Http\Controllers\TaikhoanController;
use App\Http\Controllers\CaytrongController;
use App\Http\Controllers\QuyenController;
use App\Http\Controllers\KhuController;
use App\Http\Controllers\OcaytrongController;
use App\Http\Controllers\PhunThuocController;
use App\Http\Controllers\XuatController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TinhTrangKhuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NhapController;
use App\Http\Controllers\BaiDangController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LienheController;
use App\Http\Controllers\ThongkeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

use Inertia\Inertia;

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


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});



Route::middleware('auth')->group(function () {
    // danhmucloaicay
    Route::get('admin/danhmucloaicay', [Danhmucloaicay::class, 'index'])->name('admin.danhmucloaicay');
    Route::get('admin/danhmucloaicay/create', [Danhmucloaicay::class, 'create'])->name('danhmuc.create');
    Route::post('admin/danhmucloaicay/store', [Danhmucloaicay::class, 'store'])->name('danhmuc.store');
    Route::get('admin/danhmucloaicay/edit/{id}', [Danhmucloaicay::class, 'edit'])->name('danhmuc.edit');
    Route::post('admin/danhmucloaicay/update/{danhmucloaicay}', [Danhmucloaicay::class, 'update'])->name('danhmuc.update');
    Route::get('admin/danhmucloaicay/destroy/{id}', [Danhmucloaicay::class, 'destroy'])->name('danhmuc.destroy');


    //admin 
    Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'checkrole']], function () {



        Route::get('/user', [UserController::class, 'index'])->name('admin.user');
        Route::get('/user/create', [UserController::class, 'create'])->name('u.create');
        Route::post('/user/store', [UserController::class, 'store'])->name('u.store');
        Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('u.edit');
        Route::post('/user/update/{user}', [UserController::class, 'update'])->name('u.update');
        Route::get('/user/destroy/{id}', [UserController::class, 'destroy'])->name('u.destroy');

        Route::get('thongke', [ThongkeController::class, 'index']);

        Route::get('/quyen', [QuyenController::class, 'index'])->name('admin.quyen');
        Route::get('/quyen/create', [QuyenController::class, 'create'])->name('q.create');
        Route::post('/quyen/store', [QuyenController::class, 'store'])->name('q.store');
        Route::get('/quyen/edit/{id}', [QuyenController::class, 'edit'])->name('q.edit');
        Route::post('/quyen/update/{quyen}', [QuyenController::class, 'update'])->name('q.update');
        Route::get('/quyen/destroy/{id}', [QuyenController::class, 'destroy'])->name('q.destroy');


        Route::get('/khu/create', [KhuController::class, 'create'])->name('k.create');
        Route::post('/khu/store', [KhuController::class, 'store'])->name('k.store');
        Route::get('/khu/edit/{id}', [KhuController::class, 'edit'])->name('k.edit');
        Route::post('/khu/update/{khu}', [KhuController::class, 'update'])->name('k.update');
        Route::get('/khu/destroy/{id}', [KhuController::class, 'destroy'])->name('k.destroy');
    });


    Route::get('admin/nhap', [NhapController::class, 'index'])->name('admin.nhap');
    Route::get('admin/nhap/create', [NhapController::class, 'create'])->name('nhapcay.create');
    Route::post('admin/nhap/store', [NhapController::class, 'store'])->name('nhapcay.store');
    Route::get('admin/nhap/destroy/{id}', [NhapController::class, 'destroy'])->name('nhapcay.destroy');


    // caytrong
    Route::get('admin/caytrong', [CaytrongController::class, 'index'])->name('admin.caytrong');
    Route::get('admin/caytrong/create', [CaytrongController::class, 'create'])->name('ct.create');
    Route::post('admin/caytrong/store', [CaytrongController::class, 'store'])->name('ct.store');
    Route::get('admin/caytrong/edit/{id}', [CaytrongController::class, 'edit'])->name('ct.edit');
    Route::post('admin/caytrong/update/{caytrong}', [CaytrongController::class, 'update'])->name('ct.update');
    Route::get('admin/caytrong/destroy/{id}', [CaytrongController::class, 'destroy'])->name('ct.destroy');
    Route::get('admin/caytrong/chitiet/{id}', [CaytrongController::class, 'chitietcaytrong'])->name('admin.caytrong.chitiet');

    // Xuất
    Route::get('admin/xuat', [XuatController::class, 'index'])->name('admin.xuat');
    Route::get('admin/xuat/create', [XuatController::class, 'create'])->name('xuatcay.create');
    Route::post('admin/xuat/store', [XuatController::class, 'store'])->name('xuatcay.store');
    Route::get('admin/xuat/destroy/{id}', [XuatController::class, 'destroy'])->name('xuatcay.destroy');



    // quyen


    // khucaytrong
    Route::get('admin/khu', [KhuController::class, 'index'])->name('admin.khu');

    Route::get('admin/khu/chitiet/{id}', [KhuController::class, 'ctkhu'])->name('admin.khu.chitiet');




    // lịch phun thuốc
    Route::get('admin/phunthuoc', [PhunThuocController::class, 'index'])->name('admin.phunthuoc');
    Route::get('admin/phunthuoc/create', [PhunThuocController::class, 'create'])->name('pt.create');
    Route::post('admin/phunthuoc/store', [PhunThuocController::class, 'store'])->name('pt.store');
    Route::get('admin/phunthuoc/edit/{id}', [PhunThuocController::class, 'edit'])->name('pt.edit');
    Route::post('admin/phunthuoc/update/{phunthuoc}', [PhunThuocController::class, 'update'])->name('pt.update');
    Route::get('admin/phunthuoc/destroy/{id}', [PhunThuocController::class, 'destroy'])->name('pt.destroy');







    // nhập




    // bai dang
    Route::get('admin/baidang', [BaiDangController::class, 'index'])->name('admin.baidang');
    Route::get('admin/baidang/create', [BaiDangController::class, 'create'])->name('tin.create');
    Route::post('admin/baidang/store', [BaiDangController::class, 'store'])->name('tin.store');
    Route::get('admin/baidang/edit/{id}', [BaiDangController::class, 'edit'])->name('tin.edit');
    Route::post('admin/baidang/update/{baidang}', [BaiDangController::class, 'update'])->name('tin.update');
    Route::get('admin/baidang/destroy/{id}', [BaiDangController::class, 'destroy'])->name('tin.destroy');




    Route::get('admin/login', function () {
        return view('admin.login');
    });


    // tinhtrangkhu
    Route::get('admin/tinhtrangkhu', [TinhTrangKhuController::class, 'index'])->name('admin.tinhtrangkhu');
    // Route::get('admin/tinhtrangkhu/create', [TinhTrangKhuController::class, 'create'])->name('tinhtrang.create');
    // Route::post('admin/tinhtrangkhu/store', [TinhTrangKhuController::class, 'store'])->name('tinhtrang.store');
    Route::get('admin/tinhtrangkhu/edit/{id}', [TinhTrangKhuController::class, 'edit'])->name('tinhtrang.edit');
    Route::post('admin/tinhtrangkhu/update/{phunthuoc}', [TinhTrangKhuController::class, 'update'])->name('tinhtrang.update');
    Route::get('admin/tinhtrangkhu/destroy/{id}', [TinhTrangKhuController::class, 'destroy'])->name('tinhtrang.destroy');
    Route::get('admin/tinhtrangkhu/chitiet/{id}', [TinhTrangKhuController::class, 'chitietkhu'])->name('admin.tinhtrangkhu.chitiet');



    // User

    Route::get('profile', [AuthController::class, 'showFormprofile'])->name('show-profile');
    Route::post('profile', [AuthController::class, 'profile'])->name('profile');
    Route::get('dashboard', [AuthController::class, 'Showdashboard'])->name('show-dashboard');
    Route::post('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');


    Route::get('admin/lienhe', [LienheController::class, 'index'])->name('admin.lienhe');
    Route::post('admin/lienhe/add', [LienheController::class, 'add'])->name('lh.add');

    Route::get('error', [AuthController::class, 'showError']);
});



Route::get('login', [AuthController::class, 'showFormLogin'])->name('show-form-login');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('out', [AuthController::class, 'out'])->name('out');

Route::get("forgot-password", [UserController::class, 'showForgotPasswordForm'])->name("forgotpass.get");
Route::post("forgot-password", [UserController::class, 'submitForgotPasswordForm'])->name("forgotpass.post");
Route::get("reset-password/{token}", [UserController::class, 'showResetPasswordForm'])->name("resetpass.get");
Route::post("reset-password", [UserController::class, 'submitResetPasswordForm'])->name("resetpass.post");



// client 
Route::get('/', [ClientController::class, 'ShowClient'])->name('Client.main');
Route::get('Client/tin.chitiet/{id}', [ClientController::class, 'ChiTietBaiDang'])->name('ct.chitiet');
Route::get('Client/caytrong.chitiet/{id}', [ClientController::class, 'ChiTietCay'])->name('cay.chitiet');
Route::get('Client/caytrong.cay', [ClientController::class, 'showcay'])->name('Client.caytrong');
Route::get('Client/tin.baidang', [ClientController::class, 'showbaidang'])->name('Client.tin');




// lienhe

Route::get('lienhe', [ClientController::class, 'ShowLienHe'])->name('Client.lienhe');


Route::get('/search', [ClientController::class, 'Search']);


// commit