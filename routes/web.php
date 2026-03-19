<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

Route::get('/lang/{locale}', function ($locale) {
    $allowed = ['en', 'id'];
    if (in_array($locale, $allowed)) {
        Session::put('locale', $locale);
        App::setLocale($locale);
    }
    return redirect()->back()->withHeaders(['Vary' => 'Accept-Language']);
})->name('lang.switch');

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/articles', 'articles')->name('articles');
    Route::get('/docs', 'docs')->name('docs');
    Route::get('/privacy', 'privacy')->name('privacy');
    Route::get('/terms', 'terms')->name('terms');
    Route::get('/cookies', 'cookies')->name('cookies');
    // Top-level slug route — must remain last to avoid swallowing named routes
    Route::get('/{slug}', 'articleShow')->name('articles.show');
});
