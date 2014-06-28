<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* 
 * Routes for API 
 */
Route::group(array('prefix' => 'api'), function() {
    
    Route::resource('/projects', 'MyApp\Application\API\Controllers\ProjectsController');
    
});