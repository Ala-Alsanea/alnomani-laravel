<?php

use App\Livewire\AboutUsPage;
use App\Livewire\Components\GridProduct;
use App\Livewire\ContactPage;
use App\Livewire\LandingPage;
use App\Livewire\ProductPage;
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

Route::get('/', LandingPage::class);
Route::get('/{type_id}/product', GridProduct::class);
Route::get('/about-us', AboutUsPage::class);
Route::get('/contact', ContactPage::class);


Route::get('/login', fn () => redirect('admin'));
