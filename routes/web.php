<?php

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

Route::get('/component', function () {
    return view('index-w-component', ['books' => getBooks()]);
});

Route::get('/no-component', function () {
    return view('index-wo-component', ['books' => getBooks()]);
});

function getBooks() {
    $books = array();
    for($i = 0; $i <= 10000; $i++) {
        $books[] = 'test';
    }
    return $books;
}
