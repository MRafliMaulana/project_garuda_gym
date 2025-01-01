<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PendaftaranController;
use App\Models\Pendaftaran;
use App\Models\Kontak;
use Illuminate\Http\Request;
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

Route::get("test", function(){
    return Pendaftaran::all();
});

Route::middleware('guest')->group(function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
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
Route::get('/data_masuk',function(){
    $data = [
        'pendaftaran' => Pendaftaran::all()
    ];
    return view('data_masuk', $data);
});
Route::get('/edit_data_pendaftaran/{id}', function($id){
    $pendaftaran = Pendaftaran::find($id);
    return view('edit_data_pendaftaran', ['pendaftaran' => $pendaftaran]);
})->name('edit_data_pendaftaran');
Route::put('/edit_data_pendaftaran/{id}', function(Request $request, $id){
    $data = $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'required|string',
        'pekerjaan' => 'required|string',
        'telepon' => 'required|string',
    ]);
    Pendaftaran::find($id)->update($data);

    return redirect()->back()->with('success', 'Data berhasil diubah.');
})->name('edit_data_pendaftaran.update');

Route::delete('data_masuk/{id}', function($id){
    Pendaftaran::find($id)->delete();

    return redirect()->back()->with('success', 'Data berhasil dihapus.');
})->name('data_masuk.destroy');
Route::get('/pesan_masuk',function(){
    $data = [
        'kontak' => Kontak::all()
    ];
    return view('pesan_masuk', $data);
});

Route::post('/Kontak', [KontakController::class, 'store'])->name('Kontak.store');
Route::get('/Pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/Pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
