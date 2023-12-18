<?php

use App\Http\Controllers\HowLifeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\CurhatController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\ProfilController;


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


Route::get('/adlog',[AdminLoginController::class, 'index']);
Route::post('/adlog/login',[AdminLoginController::class, 'login']);
Route::get('/adlog/logout',[AdminLoginController::class, 'logout']);

Route::get('/tes',[TestController::class, 'index']);


Route::get('/sesi',[SessionController::class, 'index'])->middleware('isGuest');
Route::post('/sesi/login',[SessionController::class, 'login'])->middleware('isGuest');
Route::get('/sesi/logout',[SessionController::class, 'logout']);
Route::get('/sesi/register',[SessionController::class, 'register'])->middleware('isGuest');
Route::post('/sesi/create',[SessionController::class, 'create'])->middleware('isGuest');

Route::get('/tentang',[TentangController::class, 'index'])->middleware('isLogin');
Route::get('/curhat',[CurhatController::class, 'index'])->middleware('isLogin');
Route::get('/faq',[FAQController::class, 'index'])->middleware('isLogin');
Route::get('/kontak',[KontakController::class, 'index'])->middleware('isLogin');
Route::get('/howlife',[HowLifeController::class, 'index'])->middleware('isLogin');
Route::get('/event',[EventController::class, 'index'])->middleware('isLogin');
Route::get('/berita',[BeritaController::class, 'index'])->middleware('isLogin');
Route::get('/profil',[ProfilController::class, 'index'])->middleware('isLogin');

Route::post('/curhat',[CurhatController::class, 'store']);



