<?php

use App\Http\Livewire\Home\HomeIndex;
use App\Http\Livewire\Posts\PostCreate;
use App\Http\Livewire\Categories\CategoriesIndex;
use App\Http\Livewire\Categories\CategoriesShow;
use App\Http\Livewire\Dashboard\DashboardIndex;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    // Home 
    Route::get('posts', HomeIndex::class)->name('posts.index');
    // Posts Create
    Route::get('posts/create', PostCreate::class)->name('posts.create');
    //Dashboard
    Route::get('dashboard', DashboardIndex::class)->name('dashboard.index');
    //Categories
    Route::get('categories', CategoriesIndex::class)->name('categories.index');
    Route::get('categories/{category}', CategoriesShow::class)->name('categories.show');
});
