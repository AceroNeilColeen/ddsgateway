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

//API GATEWAY ROUTES FOR SITE1 users

/*Same to index controller
    $router->get('/users',['uses' => 'UserController@get']); //get all users*/

//<-- get all users

$router->get('/users1', 'User1Controller@index'); //<-- get all users

$router->get('/users1/{id}', 'User1Controller@getID'); // get user by id

$router->post('/users1', 'User1Controller@add'); // create new user record

$router->patch('/users1/{id}', 'User1Controller@update'); // update user record

$router->delete('/users1/{id}', 'User1Controller@delete'); // delete record


//API GATEWAY ROUTES FOR SITE2 users

$router->get('/users2', 'User2Controller@index'); //<-- get all users

$router->get('/users2/{id}', 'User2Controller@getID'); // get user by id

$router->post('/users2', 'User2Controller@add'); // create new user record

$router->put('/users2/{id}', 'User2Controller@update'); // update user record

$router->delete('/users2/{id}', 'User2Controller@delete'); // delete record