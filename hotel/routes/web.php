<?php

use Illuminate\Support\Facades\Route;

use function Laravel\Prompts\text;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hotel', function () {
    return view('hotel');
});

// Route::get('/hotel_f1', function () {
//     return view('hotel_f1');
// });

// Route::get('/hotel_f2', function () {
//     return view('hotel_f2');
// });

// Route::get('/hotel_f3', function () {
//     return view('hotel_f3');
// });

Route::get('/hotel_f1', function () {
    return view('hotel_f1');
})->name('f1');

Route::get('/hotel_f2', function () {
    return view('hotel_f2');
})->name('f2');

Route::get('/hotel_f3', function () {
    return view('hotel_f3');
})->name('f3');


Route::get('/cars', function () {
    return view('car.index');
})->name('cars.index');

Route::get('/cars_create', function () {
    return view('car.create');
})->name('cars.create');

Route::get('/cars_edit', function () {
    return view('car.edit');
})->name('cars.edit');

Route::get('/students', function () {
    return view('student.index');
})->name('students.index');

Route::get('/students_create', function () {
    return view('student.create');
})->name('students.create');

Route::get('/students_edit', function () {
    return view('student.edit');
})->name('students.edit');


Route::get('/user/{id}', function (string $id) {
    return 'User ' . $id;
});


Route::get('/posts/{post}/comments/{comment}', function (string $postId, string $commentId) {
    $text = "postId = $postId commentId=$commentId ";
    echo $text;
});

Route::get('/num1/{num1}/num2/{num2}', function (string $num1, string $num2) {
    $sum = $num1 + $num2;
    // $text = " $num1 + $num2 = $sum ";
    // echo $text;
    return view('sum', ['num1' => $num1, 'num2' => $num2, 'sum' => $sum]);
});
