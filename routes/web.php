<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::post('/student',[StudentController::class,'submitForm']);
Route::get('/student',[StudentController:: class,'showForm']);

Route::get('/', function () {
    return view('welcome');
});
