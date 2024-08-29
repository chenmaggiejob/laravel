<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome123');
// });

Route::get('/go_hello', function () {
    return view('hello');
});

Route::get('/car', function () {
    return view('car');
});
