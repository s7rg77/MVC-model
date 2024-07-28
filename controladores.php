<?php
/**
 * Incluye el archivo 'modelo.php' que contiene funciones relacionadas 
 * con el modelo de datos.
 */
require_once 'modelo.php';

/**
 * Muestra la lista de artículos.
 *
 * @return mixed La información de la lista de artículos.
 */
function lista_articulos()
{
    /**
     * Obtiene la lista de artículos utilizando la función listar_articulos 
     * del modelo.
     */
    $articulos = listar_articulos();
    /**
     * Requiere la vista correspondiente para mostrar la lista de artículos.
     */
    require 'vista_listar.php';
}

/**
 * Muestra los detalles de un artículo específico.
 *
 * @param int $id El ID del artículo.
 * @return mixed La información detallada del artículo.
 */
function detalle_articulo($id)
{
    /**
     * Define un formulario de detalles con campos como nombre y comentario.
     */
    $formularioDetalles = array(
        array('nombre: ', 'text', 'nombre', ''),
        array('comentario: ', 'textarea', 'comentario', ''),
        array('', 'submit', 'comentar', 'comentar')
    );
    /**
     * Obtiene los detalles del artículo utilizando la función detalle_articulos 
     * del modelo.
     */
    $articulo = detalle_articulos($id);
    /**
     * Requiere la vista correspondiente para mostrar los detalles del artículo.
     */
    require 'vista_detalle.php';
}

/**
 * Muestra el formulario de registro.
 *
 * @return mixed La información del formulario de registro.
 */
function registro()
{
    /**
     * Define un formulario de registro con campos como nombre, email y contraseña.
     */
    $formularioRegistro = array(
        array('nombre: ', 'text', 'nombre', ''),
        array('email: ', 'email', 'email', ''),
        array('password: ', 'password', 'password', ''),
        array('', 'submit', 'submit', 'submit')
    );
    /**
     * Requiere la vista correspondiente para mostrar el formulario de registro.
     */
    require 'vista_registro.php';
}

/**
 * Muestra el formulario de sugerencias.
 *
 * @return mixed La información del formulario de sugerencias.
 */
function sugerencias()
{
    /**
     * Define un formulario de sugerencias con campos como sugerencia.
     */
    $formularioSugerencias = array(
        array('sugerencia: ', 'text', 'sugerencia', ''),
        array('', 'submit', 'enviar', 'enviar')
    );
    /**
     * Requiere la vista correspondiente para mostrar el formulario de sugerencias.
     */
    require 'vista_sugerencias.php';
}
?>