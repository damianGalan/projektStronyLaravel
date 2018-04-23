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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/onas','HomeController@onas');


Route::get('/oferta2','HomeController@oferta2')->name('oferta2');
Route::get('/kontakt2','HomeController@kontakt2')->name('kontakt2');
Route::get('/zdjecia2','HomeController@zdjecia2')->name('zdjecia2');
Route::get('/zamow','HomeController@zamow')->name('zamow');
Route::get('/historia','HomeController@historia')->name('historia');
Route::get('/o_mnie','HomeController@o_mnie')->name('o_mnie');
Route::post('/historia2',[
    'uses' => 'HomeController@usun',
    'as' => 'Sites.usun'
]);
Route::post('/omnie2',[
    'uses' => 'HomeController@zmien',
    'as' => 'Users.zmien'
]);


Route::get('/','SitesController@index')->name('index');
Route::get('/oferta', 'SitesController@oferta')->name('oferta');
Route::get('/kontakt', 'SitesController@kontakt')->name('kontakt');
Route::get('/zdjecia', 'SitesController@zdjecia')->name('zdjecia');
Route::post('/add', [
    'uses' => 'HomeController@save',
    'as' => 'Sites.save'
]);
/*Route::post('/register', [
    'uses' => 'SitesController@register',
    'iden' => 'Sites.register'
]);*/


Auth::routes();

Route::get('/home', 'HomeController@onas')->name('onas');
