<?php

use App\Livewire\About;
use App\Livewire\ContactPage;
use App\Livewire\HomePage;
use App\Livewire\ProjectPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomePage::class);
Route::get('/about', About::class);
Route::get('/project', ProjectPage::class);
Route::get('/contact', ContactPage::class);