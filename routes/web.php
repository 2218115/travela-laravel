<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-page.index');
});

Route::get('/about', function () {
    return view('landing-page.about');
});

Route::get('/blog', function () {
    return view('landing-page.blog');
});

Route::get('/booking', function () {
    return view('landing-page.booking');
});

Route::get('/contact', function () {
    return view('landing-page.contact');
});

Route::get('/destination', function () {
    return view('landing-page.destination');
});

Route::get('/gallery', function () {
    return view('landing-page.gallery');
});

Route::get('/guides', function () {
    return view('landing-page.guides');
});

Route::get('/packages', function () {
    return view('landing-page.packages');
});

Route::get('/services', function () {
    return view('landing-page.services');
});

Route::get('/testimonial', function () {
    return view('landing-page.testimonial');
});

Route::get('/tour', function () {
    return view('landing-page.tour');
});

Route::get('/404', function () {
    return view('landing-page.404');
});






