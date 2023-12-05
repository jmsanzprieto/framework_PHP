<?php
// Configuración general
return [
    'sitio_nombre' => 'Mi Sitio Web',
    'base_url' => '/framework',
    'autor' => 'Nombre del autor de la web',
    'css_base' => '/public/assets/style.css',
    // Datos para la conexión a un BD
    'db' => [
        'host' => 'localhost', // Cambia esto por la dirección de tu servidor MySQL
        'usuario' => 'nombre_usuario', // Cambia esto por tu nombre de usuario de MySQL
        'contrasena' => 'tu_contraseña', // Cambia esto por tu contraseña de MySQL
        'nombre_bd' => 'nombre_base_de_datos' // Cambia esto por el nombre de tu base de datos
        // Puedes agregar más configuraciones si es necesario, como el conjunto de caracteres, etc.
    ],
    'api' => [
        //  'endpoint' => $conexionAPI
        // Puedes agregar más configuraciones para la API aquí
    ],
    // Otras configuraciones...


];

// Función para establecer la conexión PDO a la base de datos
// function establecerConexion() {
//     // Configuración de la base de datos


//     try {
//         // Establecer la conexión utilizando PDO
//         $conexion = new PDO(
//             "mysql:host={$config['db']['host']};dbname={$config['db']['nombre_bd']}",
//             $config['db']['usuario'],
//             $config['db']['contrasena']
//         );

//         // Establecer el modo de error de PDO a excepción
//         $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
//         return $conexion; // Devolver la conexión establecida
//     } catch (PDOException $e) {
//         // En caso de error, muestra un mensaje de error
//         die("Error de conexión: " . $e->getMessage());
//     }
// }


// Función para establecer la conexión a la API
// function establecerConexionAPI() {


//     // Configuración de la API
//     $apiEndpoint = 'https://127.0.0.1:8080/users/';

//     // Puedes ajustar más configuraciones aquí si es necesario

//     return $apiEndpoint;
// } 

// Establecer la conexión y asignarla a una variable global
// $conexion = establecerConexion();
// $conexionAPI = establecerConexionAPI();
