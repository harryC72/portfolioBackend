ls<?php

use Illuminate\Http\Request;

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

Route::get('blogposts', 'BlogPostController@index');
Route::get('blogposts/{blogpost}', 'BlogPostController@show');
Route::post('blogposts', 'BlogPostController@store');
Route::put('blogposts/{blogpost}', 'BlogPostController@update');
Route::delete('blogposts/{blogpost}', 'BlogPostController@delete');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
