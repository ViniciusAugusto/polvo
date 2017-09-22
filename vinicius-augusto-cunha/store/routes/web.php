<?php

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

/*$router->get('/', function () use ($router) {
    return $router->app->version();
});*/
$router->get('/', function() {
    return redirect()->route('product.index');
});

$router->get('product', [
    'as' => 'product.index', 'uses' => 'ProductController@index'
]);
$router->get('product/create', [
    'as' => 'product.create', 'uses' => 'ProductController@create'
]);
$router->post('product', [
    'as' => 'product.store', 'uses' => 'ProductController@store'
]);
$router->get('product/{id}/edit', [
    'as' => 'product.edit', 'uses' => 'ProductController@edit'
]);
$router->patch('product/{id}', [
    'as' => 'product.update', 'uses' => 'ProductController@update'
]);
$router->get('product/{id}/delete', [
    'as' => 'product.delete', 'uses' => 'ProductController@delete'
]);
$router->delete('product/{id}', [
    'as' => 'product.destroy', 'uses' => 'ProductController@destroy'
]);
$router->get('order', [
    'as' => 'order.index', 'uses' => 'OrderController@index'
]);
$router->get('order/create', [
    'as' => 'order.create', 'uses' => 'OrderController@create'
]);
$router->post('order', [
    'as' => 'order.store', 'uses' => 'OrderController@store'
]);
$router->get('order/{id}/delete', [
    'as' => 'order.delete', 'uses' => 'OrderController@delete'
]);
$router->delete('order/{id}', [
    'as' => 'order.destroy', 'uses' => 'OrderController@destroy'
]);
$router->patch('order/{id}', [
    'as' => 'order.update', 'uses' => 'OrderController@update'
]);