<?php

use App\Http\Livewire\Sponsors;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Join;
use App\Http\Controllers\JaibhimController;
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

Route::get('/join', Join::class);

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

Route::get('proof-reading-committee', function () {
    return view('proof-reading-committee');
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

Route::get('photos', function () {
    return view('photos');
});

Route::get('videos', function () {
    return view('videos');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('sponsors', Sponsors::class);

Route::prefix('en')->group(function () {
    return "test";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'en', 'as' => 'en.'], function () {
    Route::get('/', [JaibhimController::class, 'index'])->name('en.welcome-en');
    Route::get('/jaibhimfoundation-administration', [JaibhimController::class, 'jaibhimfoundation_administration']);
    Route::get('/jaibhim-20-purpose', [JaibhimController::class, 'jaibhim_20_purpose']);
    Route::get('/jaibhim-20-activities', [JaibhimController::class, 'jaibhim_20_activities']);
    Route::get('/international-translation-committee', [JaibhimController::class, 'international_translation_committee']);
    Route::get('/jaibhimfoundation-team', [JaibhimController::class, 'jaibhimfoundation_team']);
    Route::get('/proof-reading-committee', [JaibhimController::class, 'proof_reading_committee']);
    Route::get('/ambedkariyam-50-purchase', [JaibhimController::class, 'ambedkariyam_50_purchase']);
    Route::get('/ambedkariyam-volume-details', [JaibhimController::class, 'ambedkariyam_volume_details']);
    Route::get('/ambedkariyam-ambassadors', [JaibhimController::class, 'ambedkariyam_ambassadors']);
    Route::get('/photos', [JaibhimController::class, 'photos']);
    Route::get('/videos', [JaibhimController::class, 'videos']);
});

require __DIR__.'/auth.php';
