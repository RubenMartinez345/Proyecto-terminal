<?php
session_start();
$servername = "DESKTOP-J0IM2T8";
$username = "root@localhost";
$password = "Peri3826!";
$dbname = "inventario_biomedica";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prevenir inyecciones SQL
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);

    $sql = "SELECT * FROM usuarios WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Comprobar la contraseña
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            header("Location: kardex.html");
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Este usuario no ha sido registrado.";
    }
}

$conn->close();
?>
