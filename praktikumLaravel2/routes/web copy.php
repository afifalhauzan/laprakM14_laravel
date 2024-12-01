<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/praktikum-laravel', function () {
    return view('praktikum2.index');
});

Route::get('events', [App\Http\Controllers\EventController::class, 'index']);
Route::get('events/{location}/{name}', [App\Http\Controllers\EventController::class,'show']);

Route::get('events/validate',[App\Http\Controllers\EventController::class, 
'showValidateForm'])->name('validateform.event'); 
 
Route::post('events/validate',[App\Http\Controllers\EventController::class, 
'validateForm'])->name('validate.event'); 