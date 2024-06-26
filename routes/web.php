<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('admin', [AdminController::class, 'index']);
Route::post('input-visimisi', [AdminController::class, 'input']);
Route::get('/', [WebController::class, 'index']);

Route::get('visi-misi', [VisimisiController::class, 'index']);
