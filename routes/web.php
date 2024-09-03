<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\XmlSitemapController;
use App\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\Route;
Route::middleware('shortcodes')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/privacy-policy', [MainController::class, 'privacyPolicy'])->name('privacy-policy');
    Route::post('/send-mail', [MailController::class, 'send'])
        ->withoutMiddleware(VerifyCsrfToken::class)
        ->name('send-mail');

    Route::get('/sitemap.xml', [XmlSitemapController::class, 'index']);

});

Route::get('/storage/{dir}/{method}/{size}/{file}', [ImageController::class, 'generate'])
    ->where('method', 'resize|crop|fit')
    ->where('size', '\d+x\d+|\d+')
    ->where('file', '.+\.(png|jpg|gif|bmp|jpeg|PNG|JPG|GIF|BMP|JPEG)$')
    ->name('thumbnails.generate');
