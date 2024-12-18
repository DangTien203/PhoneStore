<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorysController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PhonesController;

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
    return view('homepage');
});

// Category Controller
Route::get('categorys', [CategorysController::class,'index']);
Route::get('categorys/create', [CategorysController::class,'create']);
Route::post('categorys', [CategorysController::class,'store']);
Route::get('/categorys/{id}', [CategorysController::class, 'show']);
Route::post('/categorys/delete/{id}', [CategorysController::class, 'destroy']);
Route::get('/categorys/edit/{id}', [CategorysController::class, 'edit']);
Route::post('/categorys/update/{id}', [CategorysController::class, 'update']);

// Phone Controller
Route::get('phones/shopping', [PhonesController::class, 'shopping'])->name('phones.shopping');
Route::resource('phones', PhonesController::class);

// Customer Controller
Route::resource('customers', CustomersController::class);