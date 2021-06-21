<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\MuratAdmin\DersController;
use App\Http\Controllers\MuratAdmin\AdminController;

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
//FRONT KISMI İÇİN GEREKLİ ROUTELER AŞAĞIDADIR.

Route::view('/','front/index')->name('anasayfa');
Route::view('/hakkimizda','front/hakkimizda')->name('hakkimizda');
Route::view('/derslerimiz','front/derslerimiz')->name('derslerimiz');
Route::view('/hocalarimiz','front/hocalarimiz')->name('hocalarimiz');
Route::view('/iletisim','front/iletisim')->name('iletisim');


//Murat Admin Kısmı için gerekli routlere aşağıdadır.

Route::view('/dashboard', 'admin/pages/dashboard')->name('dashboard');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);


Route::group(['prefix' => 'islem' , 'as' => 'islem.'], function() {

    Route::get('/ogrenciekle', [AdminController::class,'index'])->name('ogrenciekle');
    Route::post('/ogrenciekle', [AdminController::class,'ogrenciEkle']);

    Route::get('/ogretmenekle',[AdminController::class,'ogretmenEkleIndex'])->name('ogretmenekle');
    Route::post('/ogretmenekle', [AdminController::class,'ogretmenEkle']);

    Route::get('/dersekle',[AdminController::class,'dersEkleIndex'])->name('dersekle');
    Route::post('/dersekle', [AdminController::class,'dersEkle']);

    Route::get('/listeleme',[AdminController::class,'listelemeIndex'])->name('listeleme');
    Route::post('/listeleme', [AdminController::class,'listelemeC']);

    Route::get('/dersplanla',[AdminController::class,'dersplanla'])->name('dersplanla');
    Route::post('/dersplanla',[AdminController::class,'dersPlanlaStore']);

});

Route::group(['prefix' => 'ders' , 'as' => 'ders.'], function() {

    Route::get('/pdröabt',[DersController::class,'dersPDR'])->name('pdröabt');
    Route::get('/okulöncesi',[DersController::class,'dersOKUL'])->name('okulöncesiöabt');

});







