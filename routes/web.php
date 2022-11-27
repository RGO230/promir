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

Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::get('lk/course/', 'App\Http\Controllers\CourseController@frontindex');
    Route::middleware(['role'])->group(function(){
        Route::get('/some/2', function(){return 'wafwfewef';});
    });
//   Route::middleware(['middleware'=>'role'])->group(function(){ 
   
    Route::get('/course/{course}/destroy', [App\Http\Controllers\CourseController::class, 'destroy']);
    Route::post('/course/{course}/update', [App\Http\Controllers\CourseController::class, 'update']);
    Route::resource('stream', App\Http\Controllers\StreamController::class);
    Route::get('/stream/{stream}/destroy', [App\Http\Controllers\StreamController::class, 'destroy']);
    Route::post('/stream/{stream}/update', [App\Http\Controllers\StreamController::class, 'update']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'],function(){})->name('home');
});
Route::resource('course', 'CourseController');
Route::get('/{any}', function () {
    return view('welcome');
    })->where('any', '.*');
