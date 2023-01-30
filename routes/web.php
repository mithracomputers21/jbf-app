<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('jaibhimfoundation-administration', function () {
    return view('jaibhimfoundation-administration');
});

Route::get('jaibhimfoundation-purpose', function () {
    return view('jaibhimfoundation-purpose');
});

Route::get('jaibhimfoundation-publication', function () {
    return view('jaibhimfoundation-publication');
});

Route::get('jaibhimfoundation-activities', function () {
    return view('jaibhimfoundation-activities');
});

Route::get('international-translation-committee', function () {
    return view('international-translation-committee');
});

Route::get('jaibhimfoundation-team', function () {
    return view('jaibhimfoundation-team');
});

Route::get('ambedkariyam-50-purchase', function () {
    return view('ambedkariyam-50-purchase');
});

Route::get('ambedkariyam-volume-details', function () {
    return view('ambedkariyam-volume-details');
});

Route::get('jaibhim-20-purpose', function () {
    return view('jaibhim-20-purpose');
});

Route::get('jaibhim-20-activities', function () {
    return view('jaibhim-20-activities');
});

Route::get(
    'ambedkariyam-ambassadors',
    [ProfileController::class, 'ambedkariyamAmbassadors']
)->name('ambedkariyam-ambassadors');

Route::get('ambedkariyam-library-open-procedures', function () {
    return view('ambedkariyam-library-open-procedures');
});

Route::post('/sendEventMail','JaibhimController@sendMail')->name('send.email');

Route::get('photos', function () {
    return view('photos');
});

Route::get('videos', function () {
    return view('videos');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
