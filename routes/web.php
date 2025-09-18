<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Employer;


Route::get('/' , function() {

    return view('home');
});

// Route::controller(JobController::class)->group(function() {
            
//     Route::get('/jobs', 'jobIndex');
//     Route::get('jobs/create', 'create');
//     Route::get('/jobs/{job}', 'show');
//     Route::get('/jobs/{job}/edit', 'edit');
//     Route::get('jobs/{job}/employers', 'showEmployers');
//     Route::post('/jobs' , 'store');
//     Route::patch('/jobs/{job}', 'update');
//     Route::delete('/jobs/{job}', 'destroy');

// });

Route::resource('posts',PostsController::class);

Route::resource('register', RegisterController::class);

// Route::get('/contact', function() {
//     return view('contact');
// });
