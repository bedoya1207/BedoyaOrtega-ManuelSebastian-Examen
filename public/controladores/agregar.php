<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear libro</title>
 <style type="text/css" rel="stylesheet">
 .error{
 color: red;
 }
 </style>
</head>
<body>
    
 <?php
 //incluir conexión a la base de datos
 include '../../config/conexionBD.php';
 $nombre = isset($_POST["nombre"]) ? trim($_POST["nombre"]) : null;
 $isbn = isset($_POST["isbn"]) ? trim($_POST["isbn"]) : null;
 $numero = isset($_POST["numerospag"]) ? trim($_POST["numerospag"]) : null;


$sql = "INSERT INTO libro VALUES (null , '$nombre', '$isbn', 
 '$numero')";

  if ($conn->query($sql) === TRUE) {
  echo "<p>Se ha creado el libro</p>";
  echo "<a href='../vista/capitulo.php?isbn=$isbn'>Crear Capitulos</a>";

  } else {
  if($conn->errno == 1062){
  echo "<p class='error'>El libro con este  $isbn ya esta registrado en el sistema </p>";
  }else{
  echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
  }
  }
 
  //cerrar la base de datos
  $conn->close();
  
  
  
  ?>

 </body>
 </html>