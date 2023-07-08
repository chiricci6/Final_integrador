<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "integrador";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}
//Agarra los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$comentarios = $_POST['comentarios'];
//Guarda en la base de datos
$sql = "INSERT INTO datos_formulario_1 (nombre, apellido, mail, comentarios) VALUES ('$nombre', '$apellido',  '$mail', '$comentarios')"; 
if ($conn->query($sql) === TRUE) {
  echo "Gracias por participar  ". $nombre; //mensaje de agradecimiento
} else {
  echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>
