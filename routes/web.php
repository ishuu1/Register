<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ResourceController;
use Illuminate\Http\Request;
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
    return view('welcome');
});

/*Route for sum of two given numbers in url path*/
Route::get('/sum/{first}/{second}', function ($first, $second) {
    return view('example', compact('first', 'second'));
});

/*Route for replacing given first word in sentence by second word in url path*/
//
//Route::get('/replace/{first}/{second}', function ($first, $second) {
//    $sentence = 'hello world with hello everywhere hello!';
//    $replacedSentence = str_replace($first,$second, $sentence);
//    return view('demo', compact('sentence', 'replacedSentence'));
//});
Route::resource('/form', FormController::class);
