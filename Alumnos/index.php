<html>
    <body>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<?php
$colum;
require_once('Conexion.php');
$conn = new mysqli($servername, $username, $password, $dbname);
$consulta= "SELECT * FROM alumnos";

        $result = mysqli_query($conn,$consulta);
  if(!$result) 
  {
      echo "No se ha podido realizar la consulta";
  }
echo '<table class="table table-dark table-striped table-hover">';
echo "<tr>";
echo "<th><p>ID</th></p>";
echo "<th><p>Nombre</th></p>";
echo "<th><p>Apellido</th></p>";
echo "<th><p>Edad</th></p>";
echo "<th><p>Especialidad</th></p>";
echo '<th><p>Promedio</p></th>';
echo '<th><p></p></th>';

//prueba cambio 

while ($colum = mysqli_fetch_array($result))
{
  
  echo "<tr>";
  echo "<td><h2>" .$colum ['idAlumnos']. "</td></h2>";
  echo "<td><h2>" .$colum ['nombre']. "</td></h2>";
  echo "<td><h2>" .$colum ['apellido']. "</td></h2>";
  echo "<td><h2>" .$colum ['edad']. "</td></h2>";
  echo "<td><h2>" .$colum ['especialidad']. "</td></h2>";
  echo '<td><h2> '.$colum ['promedio']. '  </h2>';
  echo '<td><h2>
  

  <form action="Eliminar2.php" method="get"> 
  <input type="hidden" name="id" value="'.$colum ['idAlumnos'].'">
  <input class="btn btn-outline-secondary" type="submit" value="Eliminar" >
  </form>
  </h2>';
 echo "</tr>";
}
echo "</table>";


mysqli_close( $conn );

   //echo "Fuera " ;
   echo'
   
   
   <a class="btn btn-outline-primary" href="insertar.html" role="button">Insertar</a>


   ';


?>
</body>
</html>
