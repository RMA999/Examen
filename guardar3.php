<?php
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
die("Fallo conectarse por: " . mysqli_connect_error());
}

$sql = "insert into rmorales.registro(nombre,apellido,edad,correo,telefono) values('".$nombre."','".$apellido."','".$edad."','".$correo."','".$telefono."');";
if ($conn->query($sql) === TRUE) {
}
$conn->close();


?>