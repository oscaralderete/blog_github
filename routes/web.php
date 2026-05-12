<?php

use Illuminate\Support\Facades\Route;

# Route::view('/', 'welcome')->name('home');
Route::livewire('/', 'pages::home')->name('home');

Route::livewire('about', 'pages::about')->name('about');

Route::livewire('contact', 'pages::contact')->name('contact');

// blog
Route::livewire('blog', 'pages::blog')->name('blog');

Route::livewire('blog/{slug}', 'pages::blog-post')->name('blog.post');


Route::middleware(['auth', 'verified'])->group(function () {
	Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';
