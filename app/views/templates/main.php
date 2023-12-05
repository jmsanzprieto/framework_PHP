<?php

if (isset($view) && file_exists($view)) {
    include $view;
} else {
    echo "Vista no encontrada";
}
?>

<p>La fecha actual es: <?php echo date('Y-m-d H:i:s'); ?></p>