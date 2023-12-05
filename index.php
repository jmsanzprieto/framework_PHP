<?php
// Autocarga de clases usando composer
//require_once __DIR__ . './vendor/autoload.php';

// Cargar la configuración
$config = require_once __DIR__ . '/app/config/config.php';

// Ruta base de la aplicación
$base_path = $config['base_url'];

// Obtener la URI después de la ruta base
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_uri = str_replace($base_path, '', $request_uri);

// Enrutador básico
// Incluir el archivo del enrutador
require_once __DIR__ . '/app/config/router.php';

// Enrutamiento de la solicitud
routeRequest($request_uri);
