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
    // return $router->app->version();
    return view('layouts.login');
});

$router->get('/login', function () use ($router) {
    return view('layouts.login');
});

$router->get('/reset_password', function () use ($router) {
    return view('layouts.reset_password');
});


$router->group(['prefix' => 'dashboard'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('index');
    });
});

$router->group(['prefix' => 'roles'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.roles');
    });
});

$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.users');
    });
});

$router->group(['prefix' => 'ads'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.ads');
    });
});

$router->group(['prefix' => 'ebrosure'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.ebrosure');
    });
});

$router->group(['prefix' => 'type_of_interest'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.type_of_interest');
    });
});

$router->group(['prefix' => 'destination'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.destination');
    });
});

$router->group(['prefix' => 'event'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.event');
    });
});

$router->group(['prefix' => 'rating'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.rating');
    });
});

$router->group(['prefix' => 'review'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.review');
    });
});

$router->group(['prefix' => 'history'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.history');
    });
});