<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/tentangKami', function () {
    return view('tentangKami');
});

Route::get('/servisKami', function () {
    return view('servisKami');
});

Route::get('/klienKami', function () {
    return view('klienKami');
});

Route::get('/kontakMereka', function () {
    return view('kontakMereka');
});

Route::get('/karir', function () {
    return view('karir');
});

Route::get('/inspeksiSertifikasiBejanaTekan', function () {
    return view('service/inspeksiSertifikasiBejanaTekan');
});

Route::get('/inspeksiSertifikasiAlatPengaman', function () {
    return view('service/inspeksiSertifikasiAlatPengaman');
});

Route::get('/inspeksiSertifikasiSaust', function () {
    return view('service/inspeksiSertifikasiSaust');
});

Route::get('/designEngineering', function () {
    return view('service/designEngineering');
});

Route::get('/kalibrasiInstrumentasi', function () {
    return view('service/kalibrasiInstrumentasi');
});

Route::get('/manPowerSupply', function () {
    return view('service/manPowerSupply');
});

Route::get('/ndtUltrasonicTesting', function () {
    return view('service/ndtUltrasonicTesting');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
 
// //Normal Users Routes List
// Route::middleware(['auth', 'user-access:user'])->group(function () {
//     Route::get('/home', [HomeController::class, 'index'])->name('home');
//     Route::get('/profile', [UserController::class, 'userprofile'])->name('profile');
// });
 
// //Admin Routes List
// Route::middleware(['auth', 'user-access:admin'])->group(function () {
//     Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin/home');
 
//     Route::get('/admin/profile', [AdminController::class, 'profilepage'])->name('admin/profile');
 
//     Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
//     Route::get('/admin/products/create', [ProductController::class, 'create'])->name('admin/products/create');
//     Route::post('/admin/products/store', [ProductController::class, 'store'])->name('admin/products/store');
//     Route::get('/admin/products/show/{id}', [ProductController::class, 'show'])->name('admin/products/show');
//     Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('admin/products/edit');
//     Route::put('/admin/products/edit/{id}', [ProductController::class, 'update'])->name('admin/products/update');
//     Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('admin/products/destroy');
// });