<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\StatisticController;
use App\Http\Controllers\WebpageController;
use App\Http\Controllers\PoliciesController;
use App\Http\Controllers\Financial_reportcController;
use App\Http\Controllers\Donation_formController;
use App\Http\Controllers\Contact_usController;
use App\Http\Controllers\MeetingsController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', [WebpageController::class, 'projects'])->name('projects');
Route::get('/policies', [WebpageController::class, 'policies'])->name('policies');
Route::get('/policie_show/{id}', [WebpageController::class, 'policie_show'])->name('policie_show');
Route::get('/members', [WebpageController::class, 'members'])->name('members');
Route::get('/contactus', [WebpageController::class, 'contactus'])->name('contactus');
Route::get('/index', [WebpageController::class, 'almokhwa'])->name('index');
Route::get('/aboutus', [WebpageController::class, 'aboutus'])->name('aboutus');
Route::get('/financial', [WebpageController::class, 'financial'])->name('financial');
Route::get('/financial_show/{id}', [WebpageController::class, 'financial_show'])->name('financial_show');
Route::get('/our_news', [WebpageController::class, 'our_news'])->name('our_news');
Route::get('/clothes_project', [WebpageController::class, 'clothes_project'])->name('clothes_project');
Route::get('/athath', [WebpageController::class, 'athath'])->name('athath');
Route::get('/paper_project', [WebpageController::class, 'paper_project'])->name('paper_project');
Route::get('/donation_form', [WebpageController::class, 'donation_form'])->name('donation_form');
Route::resource('donation', Donation_formController::class);
Route::resource('contact_us', Contact_usController::class);
Route::get('/meetings_show/{meeting}', [WebpageController::class, 'meetings_show'])->name('meetings_show');
Route::get('/meeting', [WebpageController::class, 'meeting'])->name('meeting');






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
    Route::resource('donation', Donation_formController::class);
    Route::resource('financial_report', Financial_reportcController::class);
    Route::resource('contact_us', Contact_usController::class);
    Route::get('/meetings/index', [MeetingsController::class, 'main'])->name('dashboard.meetings.index');
    Route::get('/meetings/create', [MeetingsController::class, 'create'])->name('dashboard.meetings.create');
    Route::post('/meetings/store', [MeetingsController::class, 'storee'])->name('dashboard.meetings.store');
    Route::get('/meetings/{meeting}/edit', [MeetingsController::class, 'editt'])->name('dashboard.meetings.edit');
    Route::put('/meetings/{meeting}', [MeetingsController::class, 'updatee'])->name('dashboard.meetings.update');
    Route::delete('/meetings/{meeting}', [MeetingsController::class, 'destrooy'])->name('dashboard.meetings.destroy');



    Route::get('/projects', [WebpageController::class, 'projects'])->name('projects');
    Route::get('/policies', [WebpageController::class, 'policies'])->name('policies');
    Route::get('/policie_show/{id}', [WebpageController::class, 'policie_show'])->name('policie_show');
    Route::get('/members', [WebpageController::class, 'members'])->name('members');
    Route::get('/contactus', [WebpageController::class, 'contactus'])->name('contactus');
    Route::get('/index', [WebpageController::class, 'almokhwa'])->name('index');
    Route::get('/aboutus', [WebpageController::class, 'aboutus'])->name('aboutus');
    Route::get('/financial', [WebpageController::class, 'financial'])->name('financial');
    Route::get('/financial_show/{id}', [WebpageController::class, 'financial_show'])->name('financial_show');
    Route::get('/our_news', [WebpageController::class, 'our_news'])->name('our_news');
    Route::get('/clothes_project', [WebpageController::class, 'clothes_project'])->name('clothes_project');
    Route::get('/athath', [WebpageController::class, 'athath'])->name('athath');
    Route::get('/paper_project', [WebpageController::class, 'paper_project'])->name('paper_project');
    Route::get('/donation_form', [WebpageController::class, 'donation_form'])->name('donation_form');
    Route::get('/meeting', [WebpageController::class, 'meeting'])->name('meeting');
    Route::get('/meetings_show/{meeting}', [WebpageController::class, 'meetings_show'])->name('meetings_show');
    Route::get('/download_policie/{policie}', [PoliciesController::class, 'download'])->name('download_policie');
    Route::get('/download_report/{report}', [Financial_reportcController::class, 'download'])->name('download_report');
    Route::get('/meetings_download/{meetings}', [MeetingsController::class, 'download'])->name('meetings_download');

});

require __DIR__.'/auth.php';
