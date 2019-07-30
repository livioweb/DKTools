<?php //framework/src/app.php

use Symfony\Component\Routing;
use Symfony\Component\HttpFoundation\Response;

function buscarId($id = null) {

    if(is_int($id))
        return false;

    return $id. " do produto";
    
}

$routes = new Routing\RouteCollection();
$routes->add('produto', new Routing\Route('/produto/{id}', array(
    'id' => null,
    '_controller' => function ($request) {
        if (buscarId($request->attributes->get('id'))) {
            return new Response(buscarId($request->attributes->get('id')));
        }

        return new Response('Nope, sem id declarado.');
    }
)));

return $routes;

//https://symfony.com/doc/current/create_framework/routing.html
//http://localhost:8008/produto/12
//https://symfony.com/doc/current/routing.html
