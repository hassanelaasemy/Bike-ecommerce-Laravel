<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/add' ,[ProductController::class,'addProduct'])->name('addProduct');
Route::post('/addcat' ,[CategorieController::class,'addCategory'])->name('addCategory');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
