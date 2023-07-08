<?php
// Establecer la conexión con la base de datos
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "integrador";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario de inicio de sesión
$username = $_POST['username'];
$password = $_POST['password'];

// Consultar la base de datos para verificar las credenciales del usuario
$sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Inicio de sesión exitoso
  echo "Inicio de sesión exitoso";
} else {
  // Credenciales incorrectas
  echo "Credenciales incorrectas";
}

$conn->close();
?>
