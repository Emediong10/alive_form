<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
//     return view('home');
// });

route::get('/', [HomeController:: class,'index']);
route::get('requirement', [HomeController:: class,'requirement']);
route::get('requirement_second', [HomeController:: class,'requirement_second']);
route::get('eligibility', [HomeController:: class,'eligibility']);
route::get('eligible', [HomeController:: class,'eligible']);
route::get('membership_policies', [HomeController:: class,'membership_policies']);
route::get('register',[HomeController::class, 'register'])->name('register');
route::get('registration',[HomeController::class, 'registration'])->name('registration');
