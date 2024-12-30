<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PendaftaranController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing');
});

// Route::get('/login', function(){
//     return view('login');
// });
// Route::get('/register', function(){
//     return view('register');
// });
// Route::get('/dashboard', function(){
//     return view('dashboard');
// });

Route::middleware('guest')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::middleware('auth')->group(function () {
    Route::middleware('role:admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

    Route::middleware('role:user')->group(function () {
        Route::get('/home', [HomeController::class, 'index'])->name('home');
    });
});

Route::get('/register', function () {
    return view('register');
})->name('register.view');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('forgotPassword', function () {
    return view('auth.forgotPassword');
})->middleware('guest')->name('password.request');

Route::get('/lokasi', function () {
    return view('lokasi');
})->name('lokasi');
Route::get('/Fasilitas', function () {
    return view('fasilitas');
})->name('fasilitas');
Route::get('/Pendaftaran', function () {
    return view('Pendaftaran');
})->name('Pendaftaran'); 
Route::get('/Kontak', function () {
    return view('Kontak');
})->name('Kontak');
// Route::get('/Kontak', [KontakController::class, 'index'])->name('Kontak');
Route::post('/Kontak', [KontakController::class, 'store'])->name('Kontak.store');
// Route::get('/Kontak/{id}/edit', [KontakController::class, 'edit'])->name('Kontak.edit');
// Route::put('/Kontak/{id}', [KontakController::class, 'update'])->name('Kontak.update');
// Route::delete('/Kontak/{id}', [KontakController::class, 'destroy'])->name('Kontrak.destroy');
Route::post('/Pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
// Route::post('forgotPassword', function (Request $request) {
//     $request->validate(['email' => 'required|email']);

//     $status = Password::sendResetLink(
//         $request->only('email')
//     );

//     return $status === Password::RESET_LINK_SENT
//                 ? back()->with(['status' => __($status)])
//                 : back()->withErrors(['email' => __($status)]);
// })->middleware('guest')->name('password.email');