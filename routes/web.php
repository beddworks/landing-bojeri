<?php

use Illuminate\Support\Facades\Route;

// Stitch-designed pages
Route::get('/', fn () => view('welcome'))->name('home');
Route::get('/articles', fn () => view('articles'))->name('articles');
Route::get('/articles/{slug}', fn () => view('article-show'))->name('articles.show');

Route::get('/docs', fn () => view('docs'))->name('docs');

Route::get('/privacy',  fn () => view('privacy'))->name('privacy');
Route::get('/terms',    fn () => view('terms'))->name('terms');
Route::get('/cookies',  fn () => view('cookies'))->name('cookies');
