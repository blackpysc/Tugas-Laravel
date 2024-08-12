<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('nilai/{nilai}', function ($nilai) {
    return "nilai" . $nilai;
});

Route::get('tambah/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return "nilai" . $nilai1 + $nilai2;
});
Route::get('kurang/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return "nilai" . $nilai1 - $nilai2;
});
Route::get('kali/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return "nilai" . $nilai1 * $nilai2;
});
Route::get('bagi/{nilai1}/{nilai2}', function ($nilai1, $nilai2) {
    return "nilai" . $nilai1 / $nilai2;
});

// Route::get('/{array}', function ($array) {
//     return $array =  ["php", "java", "c", "javascript", "dart"];
// });

Route::get('/array', function () {
    $arrays = ['php', 'java', 'c', 'javascript', 'dart'];
    return view('array', ['arrays' => $arrays]);
});
