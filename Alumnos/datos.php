<html>
  <body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<?php
require_once('Conexion.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($_GET["txtNombre"]!=""){

$nombre=$_GET["txtNombre"];
$apellido=$_GET["txtApellido"];
$edad=$_GET["txtEdad"];
$especialidad=$_GET["txtEspecialidad"];
$promedio=$_GET["txtPromedio"];

$_GET["txtNombre"]="";


      
   $sql = "INSERT INTO alumnos (nombre, apellido, edad,especialidad,promedio) VALUES ('".$nombre."','".$apellido."','".$edad."','".$especialidad."','".$promedio."')";
   

   
  
  $resultado = mysqli_query($conn,$sql);
   }
 
mysqli_close( $conn );

header("location:index.php");


   ?>
   </body>
   </html>