<?php

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

Route::get('/', 'PublicController@index');

Route::get('/datatables', function () {
    return view('datatables');
});

Route::get('/users/serverSide', [
    'as'   => 'users.serverSide',
    'uses' => function () {
        $users = App\User::select(['id', 'name', 'email', 'publishing_date']);
        return Datatables::of($users)->make();
    }
]);

Route::get('/author','AuthorController@index');
Route::post('/author_create','AuthorController@create');


//Route::get('/author', ['as' => 'author', 'uses' => 'AuthorController@index']);
//Route::get('/author', ['as' => 'author_create', 'uses' => 'AuthorController@create']);

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/users/serverSide', [
    'as'   => 'users.serverSide',
    'uses' => function () {
        $book = App\Book::select(['id', 'name', 'price', 'publishing_date']);
        return Datatables::of($book)->make();
    }
]);
