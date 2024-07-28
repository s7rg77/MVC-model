<?php
/**
 * Verifica si la constante CON_CONTROLADOR está definida.
 * En caso contrario, muestra un mensaje de acceso no permitido y finaliza el script.
 */
if (!defined('CON_CONTROLADOR')) {
    echo "acceso no permitido";
    die();
}

/**
 * Carga datos de ejemplo para los artículos.
 *
 * @return array Los datos de los artículos.
 */
function cargar_datos() {
    $articulos = array(
        0 => array(
            "id" => 0,
            "nombre" => "xbox series s"
        ),
        1 => array(
            "id" => 1,
            "nombre" => "xbox series x"
        ),
        2 => array(
            "id" => 2,
            "nombre" => "playStation 5"
        ),
        3 => array(
            "id" => 3,
            "nombre" => "playStation 5 pro"
        ),
        4 => array(
            "id" => 4,
            "nombre" => "switch lite"
        ),
        5 => array(
            "id" => 5,
            "nombre" => "switch oled"
        )
    );
    return $articulos;
}

/**
 * Lista todos los artículos.
 *
 * @return array La lista de artículos.
 */
function listar_articulos() {
    /**
     * Obtiene los datos de los artículos utilizando la función cargar_datos().
     */
    $articulos = cargar_datos();
    return $articulos;
}

/**
 * Obtiene los detalles de un artículo específico.
 *
 * @param int $id El ID del artículo.
 * @return array La información detallada del artículo.
 */
function detalle_articulos($id) {
    /**
     * Obtiene los datos de los artículos utilizando la función cargar_datos().
     * Retorna los detalles del artículo correspondiente al ID proporcionado.
     */
    $articulos = cargar_datos();
    return $articulos[$id];
}
?>