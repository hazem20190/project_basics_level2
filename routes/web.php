<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\OurTeamController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

//===============================FRONT PAGES============================

Route::name('front.')->controller(FrontController::class)->group(function () {

    //====================================================HOME PAGE
    Route::get('/', 'index')->name('index');
    Route::post('/', 'subscriberStore')->name('subscriber.store');

    //====================================================ABOUT PAGE
    Route::get('/about', 'about')->name('about');

    //====================================================SERVICE PAGE
    Route::get('/service', 'service')->name('service');

    //====================================================CONTACT PAGE
    Route::get('/contact', 'contact')->name('contact');
});


//===============================ADMIN PAGES============================

Route::name('admin.')->prefix(LaravelLocalization::setLocale() . '/admin')
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->group(function () {
        Route::middleware('auth')->group(function () {
            //====================================================HOME PAGE
            Route::view('/', 'admin.index')->name('index');
            //====================================================SERVICES PAGE
            Route::controller(ServiceController::class)->group(function () {
                Route::resource('services', ServiceController::class);
            });
            //====================================================FEATURES PAGE
            Route::controller(FeatureController::class)->group(function () {
                Route::resource('features', FeatureController::class);
            });
            //====================================================MESSAGES PAGE
            Route::controller(MessageController::class)->group(function () {
                Route::resource('messages', MessageController::class)->only('index', 'show', 'destroy');
            });
            //====================================================SUBSCRIBERS PAGE
            Route::controller(SubscriberController::class)->group(function () {
                Route::resource('subscribers', SubscriberController::class)->only('index', 'destroy');
            });
            //====================================================TESTIMONIALS PAGE
            Route::controller(TestimonialController::class)->group(function () {
                Route::resource('testimonials', TestimonialController::class);
            });
            //====================================================SETTINGS PAGE
            Route::controller(SettingController::class)->group(function () {
                Route::resource('settings', SettingController::class)->only('index', 'update');
            });
            //====================================================COMPANIES PAGE
            Route::controller(CompanyController::class)->group(function () {
                Route::resource('companies', CompanyController::class);
            });
            //====================================================OURTEAMS PAGE
            Route::controller(OurTeamController::class)->group(function () {
                Route::resource('ourteams', OurTeamController::class);
            });
        });
        require __DIR__ . '/auth.php';
    });
