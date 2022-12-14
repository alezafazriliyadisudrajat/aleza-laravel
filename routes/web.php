<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoneyController;

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
    return redirect('/money');
});

Route::get('/money',[MoneyController::class,'index'])->name('money');
Route::get('/form',[MoneyController::class,'form'])->name('form');
Route::post('/insertdata',[MoneyController::class,'insertdata'])->name('insert');
Route::get('/tampildata/{id}',[MoneyController::class,'tampildata'])->name('tampildata');
Route::post('/updatedata/{id}',[MoneyController::class,'updatedata'])->name('updatedata');
Route::post('/hapusdata/{id}',[MoneyController::class,'hapusdata'])->name('hapusdata');

