<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\MembershipController;
use Illuminate\Container\Attributes\Log;

Route::get('/',[HomeController::class,'index'])->name('home')->middleware('auth');
Route::get('/motivasi',[HomeController::class,'motivasi'])->name('motivasi')->middleware('auth');
Route::get('/alat',[HomeController::class,'alat'])->name('alat')->middleware('auth');
Route::get('/kegiatan',[HomeController::class,'kegiatan'])->name('kegiatan')->middleware('auth');

Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('register',[RegisterController::class,'store'])->name('register.store');
Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('login',[LoginController::class,'proses'])->name('login.proses');
Route::get('login/keluar',[LoginController::class,'keluar'])->name('login.keluar');
Route::resource('memberships', MembershipController::class);
//Route::get('create',[MembershipController::class,'membership'])->name('membership');
Route::resource('todo', TodoController::class);


Route::get('pengguna',function () {
    return view('pengguna.pengguna');
})->name('pengguna')->middleware('auth');