<?php
class BaseController
{
    protected function render($view, $config)
    {
        include __DIR__ . '/../views/templates/header.php';
        include $view;
        include __DIR__ . '/../views/templates/footer.php';
    }
}
