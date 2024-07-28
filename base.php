<?php
/**
 * Incluye el archivo 'ti.php' que contiene funciones para la manipulación 
 * de bloques HTML.
 */
require_once 'ti.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>desarrollo web entorno servidor</title>
        <style>
            body {
                font-family: Georgia, 'Times New Roman', Times, serif;
                margin: 0;
                padding: 0;
                background-color: black;
            }

            header {
                margin-top: 10px;
                display: flex;
                justify-content: center;
                background-color: green;
                color: white;
            }

            nav {
                display: flex;
                flex-wrap: wrap;
            }

            nav a {
                color: white;
                text-decoration: none;
                padding: 5px;
                margin: 5px;
                transition: background-color 0.3s;
            }

            nav a:hover {
                background-color: green;
            }

            h3 {
                color: white;
            }

            #head {
                margin-top: 10px;
                margin-right: 10px;
                display: flex;
                justify-content: flex-end;
            }

            .home,
            .doc,
            .git {
                width: 100px;
            }

            p {
                color: white;
            }

            button {
                margin-left: 10px;
                padding: 5px;
                border: none;
                background-color: #006400;
                color: #00FF00;
                cursor: pointer;
            }

            ul {
                list-style-type: none;
            }

            ul li a {
                color: white;
                text-decoration: none;
                font-size: 25px;
            }

            ul li a:hover {
                color: green;
            }

            section {
                max-width: 800px;
                margin: 10px;
            }

            footer {
                background-color: green;
                padding: 10px;
                text-align: center;
                color: white;
                position: fixed;
                bottom: 0;
                width: 100%;
            }

            form {
                color: white;
                display: flex;
                flex-direction: column;
                max-width: 400px;
                margin: 0 auto;
            }

            label {
                margin-bottom: 8px;
            }

            input, textarea {
                padding: 8px;
                margin-bottom: 16px;
                border: 1px solid #ccc;
                border-radius: 10px;
                box-sizing: border-box;
            }

            input[type="submit"] {
                cursor: pointer;
            }

            input[type="submit"]:hover {
                background-color: green;
            }

            <?php startblock('css'); ?> <?php endblock()?>
        </style>
        <script>
        function goHome() {

            window.location.href = '/';

        }

        function goGit() {

            window.location.href = 'https://github.com/s7rg77/MVC-model';

        }

        function goDoc() {

            window.location.href = '/doc';
            
        }
    </script>
    </head>
    <body>
        <div id="head">
            <button class="doc" onclick="goDoc()">doc</button>
            <button class="git" onclick="goGit()">git</button>
            <button class="home" onclick="goHome()">back</button>
        </div>
        <header>
            <h1>TIENDA</h1>
        </header>
        <nav>
            <a href="/dwes/dwes05/index.php">inicio</a>
            <a href="#">videoconsolas</a>
            <a href="#">videojuegos</a>
            <a href="/dwes/dwes05/index.php/sugerencias">sugerencias</a>
            <a href="/dwes/dwes05/index.php/registro">registro</a>
            <a href="#">contacto</a>
        </nav>
        <section>
        <?php startblock('contenido'); ?> <?php endblock()?>
        </section>
        <footer>
            <?php startblock('pie'); ?>
            <p>desarrollo web entorno servidor</p>
            <?php endblock()?>
        </footer>
    </body>
</html>