<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\ContactController;
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

Route::get('/single-page', function () {
    return view('web.single-add-page');
});


Route::get('/', [FrontPageController::class, 'index'])->name('home');
Route::get('/about-us', [FrontPageController::class,'aboutUs'])->name('about.us');
Route::get('/services', [FrontPageController::class,'services'])->name('services');
Route::get('/contact-us', [FrontPageController::class,'contactUs'])->name('contact.us');
Route::get('/privacy-policy', [FrontPageController::class,'privacyPolicy'])->name('privacy.policy');
Route::get('/game',[FrontPageController::class , 'singleGame'])->name('single.game');
Route::get('/games/{slug}' , [FrontPageController::class , 'playGameIfream'])->name('play.game.ifream');
// play game
Route::get('/{slug}' , [FrontPageController::class,'gameDetails'])->name('play.game');

// contact Us mail
Route::post('contact/mail',[ContactController::class ,'sendMail'])->name('contact.mail');