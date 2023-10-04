<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\informationController;
use App\Http\Controllers\AboutusController;


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

Route::get('registration', [informationController::class, 'index']);
Route::post('store-form1', [informationController::class, 'store']);

Route::get('/about-us', [AboutusController::class, 'index'])->name('about-us');

Route::get('information/{id}', [InformationController::class, 'show'])->name('information.show');