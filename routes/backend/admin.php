<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\Auth\User\AccountController;
use App\Http\Controllers\Backend\Auth\User\ProfileController;
use \App\Http\Controllers\Backend\Auth\User\UpdatePasswordController;

/*
 * All route names are prefixed with 'admin.'.
 */

//===== General Routes =====//
Route::redirect('/', '/user/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


//===== Teachers Routes =====//
Route::resource('teachers', 'Admin\TeachersController');
Route::get('get-teachers-data', ['uses' => 'Admin\TeachersController@getData', 'as' => 'teachers.get_data']);
Route::post('teachers_mass_destroy', ['uses' => 'Admin\TeachersController@massDestroy', 'as' => 'teachers.mass_destroy']);
Route::post('teachers_restore/{id}', ['uses' => 'Admin\TeachersController@restore', 'as' => 'teachers.restore']);
Route::delete('teachers_perma_del/{id}', ['uses' => 'Admin\TeachersController@perma_del', 'as' => 'teachers.perma_del']);



//===== Categories Routes =====//
Route::resource('categories', 'Admin\CategoriesController');
Route::get('get-categories-data', ['uses' => 'Admin\CategoriesController@getData', 'as' => 'categories.get_data']);
Route::post('categories_mass_destroy', ['uses' => 'Admin\CategoriesController@massDestroy', 'as' => 'categories.mass_destroy']);
Route::post('categories_restore/{id}', ['uses' => 'Admin\CategoriesController@restore', 'as' => 'categories.restore']);
Route::delete('categories_perma_del/{id}', ['uses' => 'Admin\CategoriesController@perma_del', 'as' => 'categories.perma_del']);


//===== Courses Routes =====//
Route::resource('courses', 'Admin\CoursesController');
Route::get('get-courses-data', ['uses' => 'Admin\CoursesController@getData', 'as' => 'courses.get_data']);
Route::post('courses_mass_destroy', ['uses' => 'Admin\CoursesController@massDestroy', 'as' => 'courses.mass_destroy']);
Route::post('courses_restore/{id}', ['uses' => 'Admin\CoursesController@restore', 'as' => 'courses.restore']);
Route::delete('courses_perma_del/{id}', ['uses' => 'Admin\CoursesController@perma_del', 'as' => 'courses.perma_del']);
Route::post('save-sequence', ['uses' => 'Admin\CoursesController@saveSequence', 'as' => 'courses.saveSequence']);


//===== Lessons Routes =====//
Route::resource('lessons', 'Admin\LessonsController');
Route::get('get-lessons-data', ['uses' => 'Admin\LessonsController@getData', 'as' => 'lessons.get_data']);
Route::post('lessons_mass_destroy', ['uses' => 'Admin\LessonsController@massDestroy', 'as' => 'lessons.mass_destroy']);
Route::post('lessons_restore/{id}', ['uses' => 'Admin\LessonsController@restore', 'as' => 'lessons.restore']);
Route::delete('lessons_perma_del/{id}', ['uses' => 'Admin\LessonsController@perma_del', 'as' => 'lessons.perma_del']);


//===== Questions Routes =====//
Route::resource('questions', 'Admin\QuestionsController');
Route::get('get-questions-data', ['uses' => 'Admin\QuestionsController@getData', 'as' => 'questions.get_data']);
Route::post('questions_mass_destroy', ['uses' => 'Admin\QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
Route::post('questions_restore/{id}', ['uses' => 'Admin\QuestionsController@restore', 'as' => 'questions.restore']);
Route::delete('questions_perma_del/{id}', ['uses' => 'Admin\QuestionsController@perma_del', 'as' => 'questions.perma_del']);


//===== Questions Options Routes =====//
Route::resource('questions_options', 'Admin\QuestionsOptionsController');
Route::get('get-qo-data', ['uses' => 'Admin\QuestionsOptionsController@getData', 'as' => 'questions_options.get_data']);
Route::post('questions_options_mass_destroy', ['uses' => 'Admin\QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
Route::post('questions_options_restore/{id}', ['uses' => 'Admin\QuestionsOptionsController@restore', 'as' => 'questions_options.restore']);
Route::delete('questions_options_perma_del/{id}', ['uses' => 'Admin\QuestionsOptionsController@perma_del', 'as' => 'questions_options.perma_del']);


//===== Tests Routes =====//
Route::resource('tests', 'Admin\TestsController');
Route::get('get-tests-data', ['uses' => 'Admin\TestsController@getData', 'as' => 'tests.get_data']);
Route::post('tests_mass_destroy', ['uses' => 'Admin\TestsController@massDestroy', 'as' => 'tests.mass_destroy']);
Route::post('tests_restore/{id}', ['uses' => 'Admin\TestsController@restore', 'as' => 'tests.restore']);
Route::delete('tests_perma_del/{id}', ['uses' => 'Admin\TestsController@perma_del', 'as' => 'tests.perma_del']);


//===== Media Routes =====//
Route::post('media/remove', ['uses' => 'Admin\MediaController@destroy', 'as' => 'media.destroy']);


//===== User Account Routes =====//
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::get('account', [AccountController::class, 'index'])->name('account');
    Route::patch('account', [UpdatePasswordController::class, 'update'])->name('account.post');
    Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
});


//==== Messages Routes =====//
Route::get('messages', ['uses' => 'MessagesController@index','as' => 'messages']);
Route::post('messages/unread', ['uses' => 'MessagesController@getUnreadMessages','as' => 'messages.unread']);
Route::post('messages/send', ['uses' => 'MessagesController@send','as' => 'messages.send']);
Route::post('messages/reply', ['uses' => 'MessagesController@reply','as' => 'messages.reply']);


//===== Orders Routes =====//
Route::resource('orders', 'Admin\OrderController');
Route::get('get-orders-data', ['uses' => 'Admin\OrderController@getData', 'as' => 'orders.get_data']);
Route::post('orders_mass_destroy', ['uses' => 'Admin\OrderController@massDestroy', 'as' => 'orders.mass_destroy']);
Route::post('orders/complete', ['uses' => 'Admin\OrderController@complete', 'as' => 'orders.complete']);
Route::delete('orders_perma_del/{id}', ['uses' => 'Admin\OrderController@perma_del', 'as' => 'orders.perma_del']);


//===== Settings Routes =====//
Route::get('settings/general', ['uses' => 'Admin\ConfigController@getGeneralSettings', 'as' => 'general-settings']);
Route::post('settings/general', ['uses' =>'Admin\ConfigController@saveGeneralSettings'])->name('general-settings');
Route::get('settings/social', ['uses' =>'Admin\ConfigController@getSocialSettings'])->name('social-settings');
Route::post('settings/social', ['uses' =>'Admin\ConfigController@saveSocialSettings'])->name('social-settings');


//===== Slider Routes =====/
Route::resource('slider', 'Admin\SliderController');
