<?php

use App\Http\Controllers\Home\ContactUsController;
use App\Http\Controllers\Home\PackageDetailController;
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

Route::get('/', function () {
    return view('index');
});

Route::prefix('home')->group(function () {
    Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact_us.store');
    Route::get('/package/{package}/details', [PackageDetailController::class, 'show'])->name('package.detail.show');
});
