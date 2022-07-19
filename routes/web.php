<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;




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
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Public URLS
Route::get('/', function () {
    return view('welcome');
});


Route::get('/publiclist', [Controller::class, 'users']);

//Public URLS -END!!

//DashBoard After Login Views
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/list', [HomeController::class, 'users']);
Route::get('/list/{id}', [HomeController::class, 'user']);

Route::post('store-form', [PostController::class, 'store']);
Route::post('update', [HomeController::class, 'update']);


Route::get('create', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);

Route::get('delete/{id}', [HomeController::class, 'delete']);

//DashBoard After Login Views -- END!




require __DIR__.'/auth.php';
