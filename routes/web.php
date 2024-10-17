<?php
use Illuminate\Support\Facades\Route;
use \App\Http\controllers\PasienController;
use \App\Http\Controllers\LoginController;
use \App\Http\Controllers\JanjiController;
use App\Http\Controllers\AntrianController;
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

Route::get('pasien', [PasienController::class,'index']);

Route::get('profil', function() {
    return '<h1>Welcome</h1>';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');
Route::post('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');

Route::get('/login', function (){
    return view('login');
});

Route::get('/reservasi', function (){
    return view('reservasi');
});

Route::get('/login',[LoginController::class, 'login'])->name('login');
Route::post('/loginproses',[loginController::class, 'loginproses'])->name('loginproses');
Route::post('/loginuser',[LoginController::class, 'loginuser'])->name('loginuser');

Route::post('/janji/store', [JanjiController::class, 'store'])->name('janji.store');

// Route::post('/antrian/store', [AntrianController::class, 'store'])->name('antrian.store');
Route::get('/janji/create', [JanjiController::class, 'create'])->name('janji.create');
Route::get('/janji/finish', [JanjiController::class, 'finish'])->name('janji.finish');


// Route::get('/antrian/finish/{antrian}', [JanjiController::class, 'finish'])->name('antrian.finish');

Route::post('/janji/store', [JanjiController::class, 'store'])->name('janji.store');
// Route::get('/antrian/finish/{id}', [JanjiController::class, 'finish'])->name('antrian.finish');

Route::get('/data-diri', function () {
    return view('pasien_create'); // Mengubah view menjadi data_pasien
})->name('data-diri');
Route::post('/data-diri', [PasienController::class, 'store'])->name('pasien.store');

//antrian baru
// routes/web.php
Route::post('/submit-antrian', [AntrianController::class, 'store'])->name('submit.antrian');
Route::get('/finish-antrian/{id}', [AntrianController::class, 'show'])->name('finish.antrian');
// routes/web.php (Laravel)
Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian.index');
Route::get('/antrian/finish', [AntrianController::class, 'finish'])->name('antrian.finish');
Route::get('/antrian/payment', [AntrianController::class, 'payment'])->name('antrian.payment');


