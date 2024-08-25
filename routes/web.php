<?php

use App\Livewire\About;
use App\Livewire\HomePage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomePage::class);
Route::get('/about', About::class);