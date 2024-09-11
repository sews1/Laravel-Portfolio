<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminBannerController;
use App\Http\Controllers\AdminSkillController;
use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminMessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeContactController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/skills', [HomeController::class, 'skill']);
Route::get('/project', [HomeController::class, 'project']);

Route::get('/about', function () {
   // return view('home.layouts.index');
   $data = [
    'content' => 'home/about/index'
   ];
    return view('home.layouts.wrapper', $data);
});

Route::get('/education', function () {
   // return view('home.layouts.index');
   $data = [
    'content' => 'home/education/index'
   ];
    return view('home.layouts.wrapper', $data);
});


Route::get('/contact', [HomeContactController::class, 'index']);
Route::post('/contact/send', [HomeContactController::class, 'send']);


Route::get('/login', [AdminAuthController::class, 'index'])->name('login');
Route::post('/login/do', [AdminAuthController::class, 'doLogin']);
Route::get('/logout', [AdminAuthController::class, 'logout']);


//====ADMIN====

Route::prefix('/admin')->middleware('auth')->group(function () {

    Route::get('/dashboard', [AdminDashboardController::class, 'index']);
    

    Route::resource('/posts/project', AdminProjectController::class);
    Route::resource('/posts/category', AdminCategoryController::class);

    Route::resource('/message', AdminMessageController::class);
    Route::resource('/skill', AdminSkillController::class);
    Route::resource('/user', AdminUserController::class);
});
