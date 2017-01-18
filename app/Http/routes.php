<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',
['as'=>'admin','uses'=>'admin_controller@login'] );
// Route::get('/','admin_controller@login');
Route::post('/',
['as'=>'post_admin','uses'=>'admin_controller@check_login'] );
//Route::get('quan-tri','admin_controller@quantri');
