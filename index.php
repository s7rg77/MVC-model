<?php
/**
 * Define la constante CON_CONTROLADOR y requiere el archivo 'controladores.php'.
 */
define('CON_CONTROLADOR', true);

/**
 * Incluye los controladores necesarios.
 */
require_once 'controladores.php';

/**
 * Obtiene la ruta de la URI actual.
 *
 * @var string $uri La URI actual.
 */
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

/**
 * Gestiona las diferentes rutas y llama a las funciones correspondientes.
 */
if (basename($uri) == 'index.php') {
    /**
     * Muestra la lista de artículos.
     *
     * @return mixed La información de la lista de artículos.
     */
    lista_articulos();
} elseif (basename($uri) == 'articulo' && isset($_GET['id'])) {
    /**
     * Muestra los detalles de un artículo.
     *
     * @param int $id El ID del artículo.
     * @return mixed La información detallada del artículo.
     */
    detalle_articulo($_GET['id']);
} elseif (basename($uri) == 'sugerencias') {
    /**
     * Muestra las sugerencias.
     *
     * @return mixed La información de las sugerencias.
     */
    sugerencias();
} elseif (basename($uri) == 'registro') {
    /**
     * Muestra la página de registro.
     *
     * @return mixed La información de la página de registro.
     */
    registro();
} else {
    // Si la ruta no coincide con ninguna de las anteriores, devuelve un error 404.
    header("HTTP/1.0 404 Not Found");
    echo '<html><body><h1>pagina no encontrada</h1></body></html>';
}
?>