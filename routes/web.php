<?php
// use Route;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AuthController::class,'index'])-> name('index');

Route::get('/show_signup', [AuthController::class,'show_signup'])-> name('show_signup');
Route::get('/logout', [AuthController::class,'logout'])-> name('logout');

Route::post('/signup', [AuthController::class,'signup'])-> name('signup');
Route::get('/person', [AuthController::class,'person'])-> name('person');
Route::post('/signin', [AuthController::class,'signin'])-> name('signin');
Route::get('/admin', [AuthController::class,'admin'])-> name('admin');
Route::get('/addTask', [AuthController::class,'addTask'])-> name('addTask');
Route::post('/addTaskUser', [AuthController::class,'addTaskUser'])-> name('addTaskUser');











