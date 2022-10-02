<?php

use App\Http\Controllers\CodeKnowlegeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

Route::get('/', [HomeController::class , 'home'])->name('home');

Route::get('/dashboard', [HomeController::class , 'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




Route::resource('language' , LanguageController::class);
Route::resource('codeKnowledge' , CodeKnowlegeController::class);

Route::get('/test' , function (){
   return config('app.env');
});
