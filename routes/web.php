<?php
Route::group(['middleware' => 'auth'], function () {

Route::group(['middleware' =>'admin'], function (){
    Route::get('/admin','Admin\AdminController@index');
    Route::get('/admin/widgets','Admin\AdminController@widgets');
    Route::get('/admin/calendar','Admin\AdminController@calendar');
    Route::get('/admin/users','Admin\AdminController@users');

});

Route::get('/teamPlayer/{id?}','PlayersController@teamPlayers');
Route::get('/players/edit/{id?}','PlayersController@editPlayers');
Route::post('/players/edit','PlayersController@postEditPlayers');


Route::get('/', 'sportController@index');
Route::get('/about', 'sportController@about');
Route::get('/team', 'sportController@team');
Route::post('/team', 'sportController@postCreateTeam');
Route::get('/news', 'sportController@news');
Route::get('/blog', 'sportController@blog');
Route::get('/contact', 'sportController@contact');

Route::group(['prefix' => 'players'], function() {
    Route::get('/', 'sportController@players');
    Route::post('/', 'sportController@players');
    Route::get('/add', 'PlayersController@addPlayers');
    Route::post('/add', 'PlayersController@postAddPlayers');
    Route::post('/remove', 'PlayersController@playersRemove');

});
Route::group(['middleware' => 'admin'],function(){
    Route::group([ 'prefix' => 'makes'], function () {
        Route::get('/', 'MakesController@index');
        Route::get('/add', 'MakesController@addMake');
        Route::post('/add', 'MakesController@addMakePost');
        Route::get('/edit/{id?}', 'MakesController@edit');
        Route::get('/remove/{id?}', 'MakesController@remove');
    });
    Route::group([ 'prefix' => 'models'], function () {
        Route::get('/', 'ModelsController@index');
        Route::get('/add', 'ModelsController@addModel');
        Route::post('/add', 'ModelsController@addModelPost');
        Route::get('/edit/{id?}', 'ModelsController@edit');
        Route::get('/remove/{id?}', 'ModelsController@remove');
    });
});
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


//dsfsdfdsjfhsdkjfjdsfsdajkfhjskdm
//dsfkjdskfjkdlsjfkdjsfkjdf
//..sdfds.f