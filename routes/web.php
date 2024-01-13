<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScreeningFormController;

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


Route::get('/', [ScreeningFormController::class, 'screeningForm']);
Route::post('/screening', [ScreeningFormController::class, 'screeningResult'])->name('screening.store');
