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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('user', 'UserController');
Route::get('dashboard','DashboardController@index');
Route::post('document','DocumentController@upload')->name('document.upload');

Route::get('document/{id}','DocumentController@delete')->name('document.delete');


Route::get('mail',function(){
  $user = App\User::find(2);
  Mail::to('samueljwerner@gmail.com')
    ->send(new App\Mail\CheckAccount($user));
});

Auth::routes();
