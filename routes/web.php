<?php

use App\Http\Controllers\LanguageController;

/*
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LanguageController::class, 'swap']);

Route::get('test',function (){
    $url = 'https://images.unsplash.com/photo-1546864903-e99c8237840d?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjF9';
    $model = new \App\Models\Lesson();
    $model->addMediaFromUrl($url)
        ->toMediaCollection();
    dd(\Spatie\MediaLibrary\Models\Media::all());
});

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/backend/');
});

Route::get('courses',['uses' => 'CoursesController@all', 'as' => 'courses.all']);
Route::get('course/{slug}', ['uses' => 'CoursesController@show', 'as' => 'courses.show']);
Route::post('course/payment', ['uses' => 'CoursesController@payment', 'as' => 'courses.payment']);
Route::post('course/{course_id}/rating', ['uses' => 'CoursesController@rating', 'as' => 'courses.rating']);

Route::get('lesson/{course_id}/{slug}', ['uses' => 'LessonsController@show', 'as' => 'lessons.show']);
Route::post('lesson/{slug}/test', ['uses' => 'LessonsController@test', 'as' => 'lessons.test']);

