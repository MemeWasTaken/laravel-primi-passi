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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {

    $data = [
        'class49' => [
            [
                'name' =>  'Fabio',
                'surname' => 'Giannitrapani',
                'age' => 34,
                'city' => 'Trapani',
            ],
            [
                'name' =>  'Sara',
                'surname' => 'Grigolin',
                'age' => 26,
                'city' => 'Padova',
            ],
            [
                'name' =>  'Francesco',
                'surname' => 'Ostellari',
                'age' => 19,
                'city' => 'Padova',
            ],
            [
                'name' =>  'Emanuele',
                'surname' => 'Lazzari',
                'age' => 20,
                'city' => 'Parma',
            ],
        ] 
    ];

    return view('home', $data);
});