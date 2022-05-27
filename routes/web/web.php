<?php

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


// To be refactored
// Route::get('/achievements-form', function () {
//     return view('achievements');
// });

// Route::get('/partnership-benefits', function () {
//     return view('/partnership-benefits');
// });
// Route::get('/advice-me', function () {
//     return view('/advice-me');
// });

// Route::get('/lifestyle-form', function () {
//     return view('lifestyle-improvements');
// });

Route::get('/congratulations-winner', function () {
    return view('congratulations-page');
});
// End

// stateless routes
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('/member-welcome', [App\Http\Controllers\HomeController::class, 'welcome'])->name('welcome');

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/member-welcome', function () {
//     return view('member-welcome');
// });

// Route::get('/signup', function () {
//     return view('member-welcome');
// });

// Get routes
Route::get('/achievements-form', [App\Http\Controllers\AchievementController::class, 'index'])->name('get-achievement');

Route::get('/partnership-benefits', [App\Http\Controllers\PartnershipBenefitsController::class, 'index'])->name('get-partnership');

Route::get('/advice-me', [App\Http\Controllers\AdviceMesController::class, 'index'])->name('get-advice');

Route::get('/lifestyle-form', [App\Http\Controllers\LifestyleImprovementsController::class, 'index'])->name('get-advice');

Route::get('/signup', [App\Http\Controllers\MembersController::class, 'index'])->name('signup');

//Post routes

Route::post('/achievements-form', [App\Http\Controllers\AchievementController::class, 'store'])->name('achievement');

Route::post('/lifestyle-form', [App\Http\Controllers\LifestyleImprovementsController::class, 'store'])->name('lifestyle');

Route::post('/signup', [App\Http\Controllers\MembersController::class, 'store'])->name('signup');

Route::post('/partnership-benefits', [App\Http\Controllers\PartnershipBenefitsController::class, 'store'])->name('partnership');

Route::post('/advice-me', [App\Http\Controllers\AdviceMesController::class, 'store'])->name('advice');
