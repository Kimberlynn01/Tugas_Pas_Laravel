<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\EmployeeController;

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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});

Route::get('session/login', function () {
    return view('session.login', [
        "title" => "Login",
    ]);
})-> name('login');

Route::get('session/signup', function () {
    return view('session/signup', [
        "title" => "Signup",
    ]);
});

// Employee routes

Route::get('/dashboard', [EmployeeController::class, 'index'])->middleware('auth')-> name('dashboard');

Route::get('/tambahabsensi', [EmployeeController::class, 'tambahabsensi'])-> name('tambahabsensi');

Route::post('/insertdata', [EmployeeController::class, 'insertdata'])-> name('insertdata');

Route::get('/editdata/{id}', [EmployeeController::class, 'editdata'])-> name('editdata');

Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata'])-> name('updatedata');

Route::get('/hapusdata/{id}', [EmployeeController::class, 'hapusdata'])-> name('hapusdata');


// Session routes


Route::get('/session', [SessionController::class, 'index']);

Route::post('/session/login', [SessionController::class, 'login']);

Route::get('/session/logout', [SessionController::class, 'logout']);

Route::get('/session/register', [SessionController::class, 'register']);

Route::post('/session/create', [SessionController::class, 'create']);
