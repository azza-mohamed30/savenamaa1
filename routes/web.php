<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\PoliciesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [WebpageController::class, 'projects'])->name('projects');
Route::get('/policies', [WebpageController::class, 'policies'])->name('policies');
Route::get('/members', [WebpageController::class, 'members'])->name('members');
Route::get('/contactus', [WebpageController::class, 'contactus'])->name('contactus');
Route::get('/almokhwa', [WebpageController::class, 'almokhwa'])->name('almokhwa');
Route::get('/aboutus', [WebpageController::class, 'aboutus'])->name('aboutus');

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('news', NewsController::class);
    Route::resource('photo', ImageController::class);
    Route::resource('statistic', StatisticController::class);
    Route::resource('policie', PoliciesController::class);
    Route::get('/projects', [WebpageController::class, 'projects'])->name('projects');
    Route::get('/policies', [WebpageController::class, 'policies'])->name('policies');
    Route::get('/members', [WebpageController::class, 'members'])->name('members');
    Route::get('/contactus', [WebpageController::class, 'contactus'])->name('contactus');
    Route::get('/almokhwa', [WebpageController::class, 'almokhwa'])->name('almokhwa');
    Route::get('/aboutus', [WebpageController::class, 'aboutus'])->name('aboutus');

});

require __DIR__.'/auth.php';
