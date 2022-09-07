<?php
namespace Framework\Routing;
//Router::addRoute(new \Framework\Routing\Route('hello', 'getHello', Route::METHOD_GET));
Router::addRoute(new \Framework\Routing\Route('hello', 'HelloController@index', Route::METHOD_GET));
Router::addRoute(new \Framework\Routing\Route('data', 'HelloController@data', Route::METHOD_GET));