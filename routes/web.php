<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::group(['middlerware'=>'web'], function(){
// });

Route::get('/',[UserController::class,'index']);
Route::group(["prefix" => "/spiderman"], function(){
});
Route::get('/register', [UserController::class, "register"])->middleware('guard');
Route::post('/register_data', [UserController::class, "user_register_data"]);
Route::get('/login', [UserController::class, "login"]);
Route::post('/login_data', [UserController::class, "user_login_data"]);
Route::post('/user_logout',[UserController::class, 'user_logout'])->name('user.user_logout');
Route::get('/dashboard', [UserController::class, "dashboard"])->middleware('guard');
Route::get('/user/edit/{id}', [UserController::class, "edit_data"])->name('user.edit');
Route::post('/user/update/{id}', [UserController::class, "update_user"])->name('user.update');
Route::post('/user/delete/{id}', [UserController::class, "delete_user"])->name('user.delete');
Route::get('/forget_password', [UserController::class, 'forgetpassword']);
Route::post('/sendmail', [UserController::class, 'sendmail']);
Route::get('/trash_data', [UserController::class, "trash_user"])->name('user.trash');
Route::post('/user/restore/{id}', [UserController::class, "restore_user"])->name('user.restore');
Route::post('/user/forcedelete/{id}', [UserController::class, "forcedelete_user"])->name('user.forcedelete');