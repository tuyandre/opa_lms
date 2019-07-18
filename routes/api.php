<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group([
    'prefix' => 'auth'
], function () {

//    Route::post('login', 'ApiController@login');
    Route::post('signup-form', 'ApiController@signupForm');
    Route::post('signup-save', 'ApiController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'ApiController@logout');

    });
});

Route::group(['middleware' => 'auth:api'],function (){
    Route::post('courses','ApiController@getCourses');
    Route::post('bundles','ApiController@getBundles');
    Route::post('search','ApiController@search');
    Route::post('latest-news','ApiController@getLatestNews');
    Route::post('testimonials','ApiController@getTestimonials');
    Route::post('teachers','ApiController@getTeachers');
    Route::post('single-teacher','ApiController@getSingleTeacher');
    Route::post('teacher-courses','ApiController@getTeacherCourses');
    Route::post('teacher-bundles','ApiController@getTeacherBundles');
    Route::post('get-faqs','ApiController@getFaqs');
    Route::post('why-us','ApiController@getWhyUs');
    Route::post('sponsors','ApiController@getSponsors');
    Route::post('contact-us','ApiController@saveContactUs');
    Route::post('single-course','ApiController@getSingleCourse');
    Route::post('submit-review','ApiController@submitReview');
    Route::post('update-review','ApiController@updateReview');
    Route::post('single-lesson','ApiController@getLesson');
    Route::post('video-progress','ApiController@videoProgress');
    Route::post('generate-certificate','ApiController@generateCertificate');
    Route::post('single-bundle','ApiController@getSingleBundle');
    Route::post('add-to-cart','ApiController@addToCart');
    Route::post('remove-from-cart','ApiController@removeFromCart');
    Route::post('get-cart-data','ApiController@getCartData');
    Route::post('clear-cart','ApiController@clearCart');
    Route::post('payment-status','ApiController@paymentStatus');
    Route::post('get-blog','ApiController@getBlog');
    Route::post('blog-by-category','ApiController@getBlogByCategory');
    Route::post('blog-by-tag','ApiController@getBlogByTag');
    Route::post('add-blog-comment','ApiController@addBlogComment');
    Route::post('delete-blog-comment','ApiController@deleteBlogComment');
    Route::post('forum','ApiController@getForum');
    Route::post('create-discussion','ApiController@createDiscussion');
    Route::post('store-response','ApiController@storeResponse');
    Route::post('update-response','ApiController@updateResponse');
    Route::post('delete-response','ApiController@deleteResponse');
});
