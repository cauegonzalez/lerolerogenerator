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

$app->get('/', function() use ($app) {
    return "Nothing to see here :)";
});

$app->group(['prefix' => 'api/v1', 'middleware' => 'authorized'], function () use ($app) {
    $app->get('lerolero/{language}', ['uses' => 'App\Http\Controllers\APIController@getLeroLero']);
});