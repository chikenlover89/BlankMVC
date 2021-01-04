<?php

return FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $namespace = '\App\Controllers\\';

    $r->addRoute('GET', '/', $namespace . 'DefaultController@index');
    $r->addRoute('GET', '/{id}', $namespace . 'DefaultController@page');

});