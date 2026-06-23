<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/services', function () {
    return view('frontend.services');
})->name('services');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/faqs', function () {
    return view('frontend.faqs');
})->name('faqs');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.submit');
