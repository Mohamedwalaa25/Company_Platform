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
Route::prefix('/')->name('front.')->group(function () {
    Route::get('', function () {
        return view('front.index');
    })->name('index');

    Route::get('/about', function () {
        return view('front.about');
    })->name('about');

    Route::get('/contact', function () {
        return view('front.contact');
    })->name('contact');

    Route::get('/project', function () {
        return view('front.project');
    })->name('project');

    Route::get('/service', function () {
        return view('front.service');
    })->name('service');

    Route::get('/team', function () {
        return view('front.team');
    })->name('team');

    Route::get('/testimonial', function () {
        return view('front.testimonial');
    })->name('testimonial');

});
//////////////////////
//Admin Routes
Route::prefix('/admin')->name('admin.')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('', function () {
            return view('admin.index');
        })->name('index');

        Route::get('/settings', function () {
            return view('admin.settings.index');
        })->name('settings');
    });
    Route::get('/skill', function () {
        return view('admin.skills.index');
    })->name('skill');

    Route::get('/categories', function () {
        return view('admin.categories.index');
    })->name('categories');

    Route::get('/subscribers', function () {
        return view('admin.subscribers.index');
    })->name('subscribers');


    Route::get('/counters', function () {
        return view('admin.counter.index');
    })->name('counters');

    Route::get('/services', function () {
        return view('admin.services.index');
    })->name('services');

    Route::get('/messages', function () {
        return view('admin.messages.index');
    })->name('messages');

    Route::get('/projects', function () {
        return view('admin.projects.index');
    })->name('projects');






    Route::get('/login', function () {
    return view('admin.auth.login');
})->name('login')->middleware('guest:admin');

Route::get('/logout', function () {
    return view('admin.auth.login');
})->name('login')->middleware('guest:admin');


});
