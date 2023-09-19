<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
    
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout']);
// Route::get('/rekap', [App\Http\Controllers\HomeController::class, 'rekap']);
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'index1'])->name('login');

Route::get('/logout', function (){
    \Auth::logout();
    return redirect('/login');
});