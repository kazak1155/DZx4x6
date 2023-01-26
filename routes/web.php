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
    $array = [
        'name' => 'oleg',
        'age' => 12,
//        'age' => 42,
        'position' => 'mind',
        'address' => 'lenina 1'
        ];
    $namePage = 'MAIN PAGE';
    return view(
        'home',
            [
                'array' => $array,
                'namePage' => $namePage
            ]
    );
});

Route::get('/contacts', function () {
    $array = [
        'address' => 'lenina 1',
        'post_code' => 1155,
//        'email' => 'tuk@email.com',
        'phone' => '1234567890'
    ];
    $namePage = 'Contacts';
    return view(
        'contacts',
        [
            'array' => $array,
            'namePage' => $namePage
        ]
    );
});
