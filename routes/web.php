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

Route::get('/', function () {

    $data =[
        'title' => 'My favourite cakes: ',
        'cakes' => [
            'Apple Pie',
            'Brownies Cake',
            'Cheesecake',
            'Cream Tart',
            'Muffin'
        ]
    ];


    return view('home', $data);

})->name('home');


Route::get('shops', function () {

    $data = [
        'title' => 'Locations: ',
        'shops' =>[
            'London',
            'York',
            'Belfast',
            'Galway'
        ]
    ];

    return view('shops', $data);

})->name('shops');
