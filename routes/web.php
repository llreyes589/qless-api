<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('cards',  ['uses' => 'CardController@showAllCards']);
    
    $router->get('cards/{id}', ['uses' => 'CardController@showCard']);
    
    $router->post('cards', ['uses' => 'CardController@create']);
    
    $router->delete('cards/{id}', ['uses' => 'CardController@delete']);
    
    $router->put('cards/{id}', ['uses' => 'CardController@update']);
    
    $router->put('reloadings', ['uses' => 'ReloadingController@save']);

    $router->post('transactions', ['uses' => 'TransactionController@create']);
    
  });