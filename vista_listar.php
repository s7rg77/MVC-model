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
    <h3>listado de artículos</h3>
    <ul>
    <?php
        /**
         * Itera sobre la lista de artículos y muestra un enlace para cada uno.
         *
         * @param array $articulos La lista de artículos.
         */
        foreach($articulos as $articulo) {
    ?>
        <li>
            <a href="index.php/articulo?id=<?php echo $articulo['id'] ?>" >
                <?php echo $articulo['nombre'] ?>
            </a>
        </li>
    <?php } ?>
    </ul>
<?php
/**
 * Finaliza el bloque de contenido.
 */
endblock();
?>