<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
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

Route::get('/', [FeedbackController::class, 'index'])->name('home');

Route::group(['prefix'=>'feedback','as'=>'feedback.'], function (){
    Route::post('/store', [FeedbackController::class, 'store'])->name('store');
});
