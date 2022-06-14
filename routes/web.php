<?php

use App\Http\Livewire\Home\HomeIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\UsersList;
use App\Http\Livewire\Admin\UserView;
use App\Http\Livewire\Posts\PostCreate;
use PHPUnit\TextUI\XmlConfiguration\Group;
use App\Http\Livewire\Dashboard\DashboardIndex;
use App\Http\Livewire\Categories\CategoriesShow;
use App\Http\Livewire\Categories\CategoriesIndex;
use App\Http\Livewire\Categories\NewCategory;
use App\Models\Categories;

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

    // Home 
    Route::get('/', HomeIndex::class)->name('posts.index');
    // Posts Create
    Route::get('posts/create', PostCreate::class)->name('posts.create')->middleware('can:post.create');
    //Dashboard
    Route::get('dashboard', DashboardIndex::class)->name('dashboard.index'); //->middleware('can:post.create');
    //Categories
    Route::get('categories', CategoriesIndex::class)->name('categories.index');
    Route::get('categories/{category}', CategoriesShow::class)->name('categories.show');
    Route::get('new', NewCategory::class)->name('categories.new')->middleware('can:categories.create');

    //Admin Panel
    Route::group(['as' => 'admin.', 'middleware' => ['can:user.administration']], function () {
        Route::get('users', UsersList::class)->name('users');
        Route::get('users/{user}', UserView::class)->name('user');
    });
