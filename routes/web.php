<?php

use App\Http\Controllers\ProfileController;
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
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');
//
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
//
//require __DIR__.'/auth.php';

//User Routes
Route::prefix('/')->name('front.')->group(function (){
    Route::get('',function (){
        return view('front.index');
    })->name('index');

    Route::get('/about',function (){
        return view('front.about');
    })->name('about');

    Route::get('/contact',function (){
        return view('front.contact');
    })->name('contact');

    Route::get('/project',function (){
        return view('front.project');
    })->name('project');

    Route::get('/service',function (){
        return view('front.service');
    })->name('service');

    Route::get('/team',function (){
        return view('front.team');
    })->name('team');

    Route::get('/testimonial',function (){
        return view('front.testimonial');
    })->name('testimonial');

});
//////////////////////
//Admin Routes
Route::prefix('/admin')->name('admin.')->group(function (){
    Route::get('',function (){
        return view('admin.index');
    })->name('index');


});
