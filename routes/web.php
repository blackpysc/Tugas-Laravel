<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/regis', function () {
    return view('regis');
});



// Route::get('/{array}', function ($array) {
//     return $array =  ["php", "java", "c", "javascript", "dart"];
// });

Route::get('/array', function () {
    $arrays = ['php', 'java', 'c', 'javascript', 'dart'];
    return view('array', ['arrays' => $arrays]);
});




// Route::resource('index', SiswaController::class);

Route::resource('siswa', SiswaController::class);
