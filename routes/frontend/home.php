<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */

/*=============== Theme blades routes starts ===================*/
Route::get('/index-2', function (){
    return view('frontend.index-2');
})->name('index-2');

Route::get('/index-3', function (){
    return view('frontend.index-3');
})->name('index-3');

Route::get('/index-4', function (){
    return view('frontend.index-4');
})->name('index-4');

//Route::get('/about-us', function (){
//    return view('frontend.about-us');
//})->name('about-us');

Route::get('/shop', function (){
    return view('frontend.shop');
})->name('shop');

Route::get('/contact', function (){
    return view('frontend.contact');
})->name('contact');

Route::get('/teacher', function (){
    return view('frontend.teacher');
})->name('teacher');

Route::get('/teacher-details', function (){
    return view('frontend.teacher-details');
})->name('teacher-details');

Route::get('/blog-single', function (){
    return view('frontend.blog-single');
})->name('blog-single');

Route::get('/course', function (){
    return view('frontend.course');
})->name('course');

Route::get('/course-details', function (){
    return view('frontend.course-details');
})->name('course-details');

Route::get('/faqs', 'HomeController@getFaqs')->name('faqs');

Route::get('/checkout', function (){
    return view('frontend.checkout');
})->name('checkout');

Route::get('/404', function (){
    return view('frontend.404');
})->name('404');



/*=============== Theme blades routes ends ===================*/



Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', [AccountController::class, 'index'])->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});


