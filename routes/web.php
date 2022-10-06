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
    $data = [
        'msg' => 'Ciao',
        'students' => [
            'Antonio D\'angelo',
            'Nico Bianco',
            'Rocco Serra',
            'Alan Bianchi',
            'Miriana Conte'
        ]
    ];

    return view('home', $data);
});
