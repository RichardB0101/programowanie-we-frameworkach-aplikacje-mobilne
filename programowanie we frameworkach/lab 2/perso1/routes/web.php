<?php

use App\Http\Controllers\RouteController;
use App\Http\Controllers\CrudController;
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

Route::get('/', [RouteController::class, 'index']);
Route::post('/submitProfile', [CrudController::class, 'saving'])->name('submitProfile');
Route::post('/delAllProfile', [CrudController::class, 'delAll'])->name('delAllProfile');
Route::get('/delProfile/{id}', [CrudController::class, 'delOne'])->name('delProfile');


