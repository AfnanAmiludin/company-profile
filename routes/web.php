<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sertif;

Route::get('/', function () {
    return view('companyprofile');
});

Route::get('/welcom', function () {
    return view('welcome');
});
Route::get('/certificate', function () {
    return view('certificate');
});
Route::post('/certificate-api', [Sertif::class, 'index']);

