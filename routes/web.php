<?php
use App\Http\Controllers\StreamController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('login');
});
Route::middleware('AdminRole')->group(function(){
    Auth::routes(function(){
    });

    Route::resource('course', App\Http\Controllers\CourseController::class,function(){
    });
    
    Route::get('/course/{course}/destroy', [App\Http\Controllers\CourseController::class, 'destroy'],function(){
    });
    
    Route::post('/course/{course}/update', [App\Http\Controllers\CourseController::class, 'update'],function(){
    });

    
    Route::resource('stream', App\Http\Controllers\StreamController::class,function(){
    });
    
    Route::get('/stream/{stream}/destroy', [App\Http\Controllers\StreamController::class, 'destroy'],function(){
    });
    
    Route::post('/stream/{stream}/update', [App\Http\Controllers\StreamController::class, 'update'],function(){
    });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'],function(){    
    })->name('home');
});