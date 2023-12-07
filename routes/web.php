<?php

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


Route::get('/', function () {

    $data = [
        'title' => 'Hello World',
        'about' => 'About us',
        'contact' => 'Contact us',
        'blog' => 'Blog'
    ];
    return view('home', $data);
});

Route::get('/about-us', function () {

    $home = 'Home';
    $about = 'About us';
    $blog = 'Blog';
    $contact = 'Contact us';

    return view('about-us', compact('home', 'about', 'blog', 'contact'));
});

Route::get('/contact', function () {

    $data = [
        'title' => 'Hello World',
        'about' => 'About us',
        'contact' => 'Contact us',
        'blog' => 'Blog'
    ];
    return view('contact', $data);
});

Route::get('/blog', function () {

    $data = [
        'title' => 'Hello World',
        'about' => 'About us',
        'contact' => 'Contact us',
        'blog' => 'Blog'
    ];
    return view('blog', $data);
});
