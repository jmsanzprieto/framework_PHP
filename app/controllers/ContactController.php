<?php
require_once 'BaseController.php';

class ContactController extends BaseController
{

    private $config;
    private $view;

    public function __construct()
    {
        // Cargar configuración y ruta de la vista una sola vez en el constructor
        $this->config = require __DIR__ . '/../config/config.php';
        $this->view = __DIR__ . '/../views/contact_view.php';
    }

    public function index()
    {
        $this->render($this->view, $this->config);
    }
}
