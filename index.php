<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Especialista en Lenguaje</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #3e8ed0;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        nav {
            display: flex;
            justify-content: center;
            background-color: #4a90e2;
        }
        nav a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            background-color: #367bb0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }
        img {
            width: 100%;
            max-width: 400px;
            height: auto;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        form input, form textarea {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form button {
            padding: 10px 20px;
            background-color: #3e8ed0;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #367bb0;
        }
        footer {
            text-align: center;
            padding: 30px;
            background-color: #4a90e2;
            color: white;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<header>
    <h1>Especialista en Lenguaje</h1>
</header>

<nav>
    <a class= "btn" href="especialidad.php">Especialidad</a>
    <a href="#games">Juegos y Manualidades</a>
    <a href="#">Ubicación</a>
    <a href="#contact">Contacto</a>
</nav>

<section class="contact vertical-padding" id="contact">
    </section>  

<section class="games" id="games">
    <img scr="juegos.jpg" alt="Imagen de juegos" class="wave" />
    </section>

   
    <div class="container">
    <img src="consultorio.jpg" alt="Imagen de consultorio">

    <p><strong>Soy Clara Estudillo Lic. en terapia del lenguaje y Diplomada en Atención y Estimulación Temprana</strong></p>
    <p>¿Cómo trabajo? Entrevista inicial, evaluación y luego abordaje terapéutico.</p>
    <p>Cualquier duda o consulta podés completar el formulario a continuación:</p>

    <form action="enviar_formulario.php" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Correo electrónico" required>
        <input type="tel" name="telefono" placeholder="Teléfono" required>
        <textarea name="mensaje" placeholder="Mensaje" required></textarea>
        <button type="submit">Enviar</button>
    </form>
</div>

<footer>
    <p>2024 Mendoza, Argentina</p>
</footer>
   
    
</body>
</html>





<a href="index.php"><Inicio</a>
        <button>Inicio<button/a>