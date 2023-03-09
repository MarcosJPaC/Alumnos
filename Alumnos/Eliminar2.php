<html>

<?php
require_once("Conexion.php");
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Conexión fallida: " . $conn->connect_error);
}

// Recuperar el ID de la fila a borrar
$id = $_GET["id"];

// Ejecutar la consulta SQL para borrar la fila
$sql = "DELETE FROM alumnos WHERE idAlumnos = $id";
if ($conn->query($sql) === TRUE) {
	echo "Fila borrada correctamente";
} else {
	echo "Error al borrar la fila: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
header("location:index.php");
?>

</hmtl>