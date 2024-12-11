<?php
// Mostrar el nombre del host
$hostname = gethostname();
echo "<h1>Host: $hostname</h1>";
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melany Tienda</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1em;
            text-align: center;
            font-size: 1.5em;
            font-weight: bold;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #333;
        }
        nav a {
            color: white;
            padding: 14px 20px;
            text-decoration: none;
            font-size: 1em;
        }
        nav a:hover {
            background-color: #4CAF50;
            color: white;
            transition: 0.3s;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
            font-size: 0.9em;
        }
        .welcome-message {
            margin-top: 50px;
            font-size: 1.8em;
            font-weight: bold;
            color: #4CAF50;
        }
        .description {
            font-size: 1.2em;
            margin-top: 10px;
            color: #555;
        }
        .cta-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 1.1em;
            border-radius: 5px;
            transition: 0.3s;
        }
        .cta-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php
// Mostrar el nombre del host
$hostname = gethostname();
echo "<h1>Host: $hostname</h1>";
?></h1>
    </header>
    <nav>
        <a href="#home">Inicios</a>
        <a href="#about">Nosotros</a>
        <a href="#services">Servicios</a>
        <a href="#contact">Contacto</a>
    </nav>
    <main>



        <div class="welcome-message">Primeros cambios 2</div>

       

        <p class="description">Tu espacio para encontrar productos únicos y de calidad.</p>
        <a href="#explore" class="cta-button">Explora ahora</a>
    </main>
    <footer>
        &copy; 2023 Melany Tienda. Todos los derechos reservados.
    </footer>
</body>
</html>
