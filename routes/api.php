<?php

use Illuminate\Http\Request;
Use App\User;

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

Route::post('users', function(Request $request) {
    return User::create($request->all);
});

Route::put('users/{id}', function(Request $request, $id) {
    $user = User::findOrFail($id);
    $user->update($request->all());

    return $user;
});

Route::patch('users/{id}', function(Request $request, $id) {
    $user = User::findOrFail($id);
    $user->update($request->all());

    return $user;
});

Route::get('users', function() {
    return User::all();
});

Route::get('users/{id}', function($id) {
    return User::find($id);
});

Route::delete('users/{id}', function($id) {
    User::find($id)->delete();

    return 204;
});

Route::post('login', 'Auth\LoginController@login');

Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::patch('users/{user}', 'UserController@update');
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::delete('users/{user}', 'UserController@delete');