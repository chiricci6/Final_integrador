<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "integrador";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}
//agarra los datos

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$comentarios = $_POST['comentarios'];

//guarda los datos
$sql = "INSERT INTO datos_formulario_1 (nombre, apellido, comentarios) VALUES ('$nombre', '$apellido', '$comentarios')"; //aca guarda dentro de mi tabla que esta en la base de datos
if ($conn->query($sql) === TRUE) {
  echo "Gracias por participar  ". $nombre; //mensaje de agradecimiento
} else {
  echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>
