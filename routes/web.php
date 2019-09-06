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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api/v1'], function($router){
    $router->post('member/add', 'MembersController@createMember');
    $router->get('member/view/{id}', 'MembersController@viewMember');
    $router->put('member/edit/{id}', 'MembersController@updateMember');
    $router->delete('member/delete/{id}', 'MembersController@deleteMember');
    $router->get('member/index', 'MembersController@index');
});
