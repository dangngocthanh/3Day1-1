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
    return view('dictionary');
});

Route::post('/translate', function (\Illuminate\Http\Request $request) {
    $inp = $request->inp;
    $result = 'Khong co tu nay';
    $dictionary = [
        'hello' => 'xin chào',
        'superman' => 'siêu nhân',
        'school' => 'trường học',
        'man' => 'đàn ông',
        'girl' => 'cô gái'
    ];
    foreach ($dictionary as $key => $value) {
        if ($key == $inp) {
            $result = $value;
        }
    }
    return view('dich', compact(['inp', 'result']));
});
