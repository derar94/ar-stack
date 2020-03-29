<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ChanelController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'questions'], function () {
    Route::get('all', 'QuestionController@index')->name('questions.index');
    Route::get('latest', 'QuestionController@latest')->name('questions.latest');
});
Route::group(['prefix' => 'chanels'], function () {
    Route::get('all', 'ChanelController@index')->name('chanels.index');
    Route::get('latest', 'ChanelController@latest')->name('chanels.latest');
});
 