<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::view('/about','about');
Route::view('/contact','contact');
Route::view('/Programs','Programs');
