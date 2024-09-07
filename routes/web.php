<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/annunci', function(){
    return view('annunci');
});

Route::get('/chi-siamo', function(){
    return view('chi-siamo');
});
