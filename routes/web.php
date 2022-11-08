<?php

use App\Http\Controllers\GenshinCharacterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('characters');
});
Route::get('/characters', function () {
    return view('characters');
});
Route::get('/download', function () {
    return view('download');
});
Route::get('/tighnari', function () {
    return view('tighnari');
});
Route::get('/nahida', function () {
    return view('nahida');
});
Route::get('/nilou', function () {
    return view('nilou');
});
Route::get('/cyno', function () {
    return view('cyno');
});
Route::get('/dora', function () {
    return view('dori');
});
Route::get('/collei', function () {
    return view('collei');
});
Route::get('/candice', function () {
    return view('candice');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/profile', [GenshinCharacterController::class, 'index']);

