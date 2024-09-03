<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventario de Biomédica</title>
  <link rel="stylesheet" href="css/estilos.css">
  <style>
    /* General styles */
    body {
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background-color: #f5f5f5; /* Light gray background */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
    }

    /* Header styles */
    header {
      background-color: #3399cc; /* Dark blue header */
      color: #fff; /* White text for contrast */
      padding: 20px;
      text-align: center;
      width: 100%;
      position: relative;
    }

    h1 {
      font-size: 2em;
      margin: 0;
    }

    /* Top images container */
    .top-images {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
      width: 100%;
    }

    .top-images img {
      width: auto; /* Allow images to scale proportionally */
      max-width: 200px; /* Set a maximum width for responsiveness */
      height: auto; /* Maintain aspect ratio */
    }

    /* Login form container */
    .login-form {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
      text-align: center;
      margin-top: 20px;
    }

    .login-form h2 {
      margin-bottom: 20px;
    }

    .login-form label {
      display: block;
      margin-bottom: 10px;
      text-align: left;
    }

    .login-form input {
      width: calc(100% - 20px);
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      margin-bottom: 20px;
      font-size: 1em;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .button-container button, .button-container a {
      background-color: #3399cc;
      color: #fff;
      padding: 10px 0;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 48%; /* Ensure buttons have the same size */
      text-align: center;
      text-decoration: none;
      font-size: 1em; /* Ensure same font size */
    }

    .button-container button:hover, .button-container a:hover {
      background-color: #2980b9;
    }
  </style>
</head>
<body>
  <header>
    <h1>Inventario de Biomédica</h1>
    <div class="top-images">
      <img src="LOGOIN.png" alt="Descripción de la imagen izquierda">
      <img src="Imagenes/BIOMEDICALOG.png" alt="Descripción de la imagen derecha">
    </div>
  </header>
  <div class="login-form">
    <h2>Iniciar Sesión</h2>
    <form action="usuarios.php" method="post">
      <label for="username">Usuario:</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Contraseña:</label>
      <input type="password" id="password" name="password" required>
      <div class="button-container">
        <button type="submit">Ingresar</button>
        <a href="registro_usuario.html" class="register-button">Registros</a>
      </div>
    </form>
  </div>

  <?php
      include ("send.php")
  ?>
  <script>
    function myFunction() {
      window.location.href="http://localhost/pagina"
      
    }
  </script>

</body>
</html>

