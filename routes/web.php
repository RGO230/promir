<?php
use App\Http\Controllers\StreamController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@frontIndex');

Route::get('/service', 'HomeController@service');

 Route::get('/subcourse',[App\Http\Controllers\PayController::class,'getCoursesWithSubCourses']);
 Route::get('/courses','CourseController@frontIndex');


Route::post('initpay','PayController@init');

Route::get('pay-success','PayController@success');
Route::get('pay-error','PayController@error');

Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('lk/course/', 'CourseController@frontLk')->name('front.course');
    Route::middleware(['role'])->group(function(){
        Route::resource('course', 'CourseController');
        Route::get('/course/{course}/destroy', [App\Http\Controllers\CourseController::class, 'destroy']);
        Route::post('/course/{course}/update', [App\Http\Controllers\CourseController::class, 'update']);
        Route::resource('stream', 'StreamController');
        Route::get('/stream/{stream}/destroy', [App\Http\Controllers\StreamController::class, 'destroy']);
        Route::post('/stream/{stream}/update', [App\Http\Controllers\StreamController::class, 'update']);
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'],function(){})->name('home');
});

