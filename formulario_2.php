<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "integrador";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}
//Agarra los datos que se pusieron en el formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$quantity = $_POST['quantity'];
//Guarda los datos ingresados
$sql = "INSERT INTO datos_formulario_2 (nombre, apellido, mail, quantity) VALUES ('$nombre', '$apellido', '$mail', '$quantity')"; 
if ($conn->query($sql) === TRUE) {
  echo "Gracias por participar  ". $nombre; //mensaje de agradecimiento
} else {
  echo "Error al guardar los datos: " . $conn->error;
}

$conn->close();
?>