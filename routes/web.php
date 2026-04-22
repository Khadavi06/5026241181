<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pt5', function () {
    return view('pertemuan5Index');
});

Route::get('pertemuan5', function () {
    return view('pertemuan5');
});

Route::get('TugasLinktreePt5', function () {
    return view('TugasLinktreePt5');
});

Route::get('pt1', function () {
    return view('pertemuan1');
});

Route::get('pt2', function () {
    return view('pertemuan2');
});

Route::get('pt3', function () {
    return view('pertemuan3');
});

Route::get('tg3', function () {
    return view('TugasPertemuan3');
});

Route::get('pt4', function () {
    return view('pertemuan4');
});

Route::get('dosen', [DosenController::class, 'index']);

Route::get('biodata', [DosenController::class, 'biodata']);


