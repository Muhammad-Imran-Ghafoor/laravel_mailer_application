<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFGenContoller;
use App\Http\Controllers\ProductController;
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
    return view('add_product');
});
Route::post('/product', [ProductController::class , 'index']);
Route::get('/gen_pdf', PDFGenContoller::class);

