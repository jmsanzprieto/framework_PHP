<?php
require_once 'BaseController.php';

class AboutController extends BaseController
{
    private $config;
    private $view;

    public function __construct()
    {
        // Cargar configuración y ruta de la vista una sola vez en el constructor
        $this->config = require __DIR__ . '/../config/config.php';
        $this->view = __DIR__ . '/../views/about_view.php';
    }


    public function index()
    {

        $this->render($this->view, $this->config);
    }

    // Funcion para saludar
    public function saludo($params)
    {
        // Puedes pasar el parámetro a la vista de alguna manera (por ejemplo, a través del array $config)
        $this->config['saludo_param'] = $params;
        $this->render($this->view, $this->config, ['saludo_param' => $params]);


    }

    //Funcion para multiplicar
    public function multiplica($params)
    {
 
        for ($i = 0; $i <= 10; $i++) {
            $multiplica = $i * $params;
            $resultado = "$i X $params = $multiplica";
            $resultados[] = $resultado;
        }

        $this->config['multiplica'] = $resultados;
        $this->render($this->view, $this->config, ['multiplica' => $resultados]);

    }


}
