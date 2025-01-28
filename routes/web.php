<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FileDownloadController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;


Route::get('/clear/{command}', function ($command) {
    $response = Artisan::call($command);
    dd($response);
});



Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');

    Route::get('mdmessage', 'mdmessage')->name('mdmessage');



    Route::get('abouts', 'about')->name('abouts');


});
Route::get('page/{slug}', [PageController::class, 'show'])->name('page.show');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('login', [LoginController::class, 'adminlogin'])->name('login'); // Display login form

Route::post('/logins', [LoginController::class, 'login'])->name('login.submit'); // Process login form submission

Route::post('/register', [LoginController::class, 'register'])->name('register');

Route::get('/training-events', [EventController::class, 'index'])->name('training.search');

Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');


Route::get('/download/{fileName}', [FileDownloadController::class, 'download'])->name('document.download');
