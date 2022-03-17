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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('a', function () {
//     return view('a');
// });


Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('cont','Firsts@index');
});

// Route::get('culc/{one}/{two}', function ($one , $two) {
//     return $one+$two;
// })->name('cc');

Route::get('check',function(){
    return "checked";
})->middleware('auth');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
