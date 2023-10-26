<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PRODUTOController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProdutoImagemMController;










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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', [PRODUTOController::class, 'index']);
;




Route::get('/produto/{id}', [App\Http\Controllers\PRODUTOController::class, 'show']);
//Route::get('/about', [AboutController::class, 'showAbout']);





Route::get('/categorias', 'CategoriaController@index');

















