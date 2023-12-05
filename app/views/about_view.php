    <p>Esta es la página sobre nosotros.</p>
    <p>Si hay datos, se muestra aquí debajo:</p>
    <?php
      // Verificar si hay datos que se pasan del controlador
      if (isset($config['saludo_param'])) {
         // Si se pasa el saludo
         echo '<p>Saludo desde el controlador: ' . htmlspecialchars($config['saludo_param']) . '</p>';
      } else if (isset($config['multiplica'])) {
         // Si se pasa la multiplicación
         foreach ($config['multiplica'] as $key) {
            echo $key . "<br>";
         }
      }
      ?>