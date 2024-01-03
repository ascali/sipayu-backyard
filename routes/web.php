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
    return view('layouts.login', ["title" => "Login"]);
});

$router->get('/login', function () use ($router) {
    return view('layouts.login', ["title" => "Login"]);
});

$router->get('/reset_password', function () use ($router) {
    return view('layouts.reset_password', ["title" => "Reset Password"]);
});


$router->group(['prefix' => 'dashboard'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.dashboard', ["title" => "Dashboard"]);
    });
});

$router->group(['prefix' => 'roles'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.roles', ["title" => "Roles"]);
    });
});

$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.users', ["title" => "Users"]);
    });
});

$router->group(['prefix' => 'ads'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.ads', ["title" => "Advertisment"]);
    });
});

$router->group(['prefix' => 'ebrosure'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.ebrosure', ["title" => "eBrosure"]);
    });
});

$router->group(['prefix' => 'type_of_interest'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.type_of_interest', ["title" => "Type of Interest"]);
    });
});

$router->group(['prefix' => 'destination'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.destination', ["title" => "Destination"]);
    });
});

$router->group(['prefix' => 'event'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.event', ["title" => "Event"]);
    });
});

$router->group(['prefix' => 'rating'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.rating', ["title" => "Rating"]);
    });
});

$router->group(['prefix' => 'review'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.review', ["title" => "Review"]);
    });
});

$router->group(['prefix' => 'history'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.history', ["title" => "History"]);
    });
});

$router->group(['prefix' => 'term_and_conditions'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return view('modules.term_and_conditions', ["title" => "Term & Conditions"]);
    });
});