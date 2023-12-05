<?php 

function routeRequest($request_uri)
{
    // Incluir el archivo de rutas
    $routes = require 'routes.php';

    // Buscar una coincidencia en las rutas
    $matchedRoute = null;
    $function = [];
    $params = [];

    foreach ($routes as $route => $controller) {
        // Convertir la ruta en una expresión regular
        $pattern = str_replace('/', '\/', $route);
        $pattern = "/^" . preg_replace('/\{(\w+)\}/', '([^\/]+)', $pattern) . "$/";

        // Verificar si la URI coincide con el patrón
        if (preg_match($pattern, $request_uri, $matches)) {
            $matchedRoute = $route;
            $params = array_slice($matches, 1);
            // echo "<pre>";
            // print_r($params);
            break;
        }
    }

    // Encontrar el controlador correspondiente para la ruta solicitada
    $controller = $routes[$matchedRoute] ?? false;

    if ($controller) {
        // Dividir la ruta en partes (controlador, función, parámetros)
        $routeParts = explode('/', trim($matchedRoute, '/'));
        $controllerFile = "./app/controllers/{$controller}.php";

        if (file_exists($controllerFile)) {
            require $controllerFile;
            $controllerInstance = new $controller();

            // Llamar a la función correspondiente
            $function = $params[0] ?? 'index';
            
            // Convertir $params[1] en un array llamado $params
            $params = isset($params[1]) ? ['params' => $params[1]] : [];

            if (method_exists($controllerInstance, $function)) {
                // Llamar a la función con los parámetros obtenidos
                call_user_func_array([$controllerInstance, $function], $params);
            } else {
                http_response_code(404);
                echo 'La funcion no existe';
            }
        } else {
            http_response_code(404);
            echo 'El controlador no existe';
        }
    } else {
        http_response_code(404);
        echo 'Página no encontrada';
    }
}
