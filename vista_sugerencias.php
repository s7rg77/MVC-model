<?php
/**
 * Verifica si la constante CON_CONTROLADOR está definida.
 * En caso contrario, muestra un mensaje de acceso no permitido y finaliza el script.
 */
if (!defined('CON_CONTROLADOR')) {
    echo "acceso no permitido";
    die();
}
?>
<?php
/**
 * Incluye el archivo 'base.php' que contiene la estructura básica de la página.
 */
include 'base.php';
?>
<?php
/**
 * Inicia el bloque de contenido.
 */
startblock('contenido');
?>
    <h3>sugerencias</h3>
    <ul>
    </ul>
    <br><br>
    <?php
        /**
         * Crea un formulario utilizando los campos definidos en $formularioSugerencias.
         */
        echo '<form action="" method="POST">';
        foreach ($formularioSugerencias as $campo):
            echo $campo[0].'<input type="'.$campo[1].'",
            name="'.$campo[2].'", value="'.$campo[3].'">';
        endforeach;
        echo '</form>';
    ?>
<?php
/**
 * Finaliza el bloque de contenido.
 */
endblock();
?>