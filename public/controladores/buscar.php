<?php
 //incluir conexión a la base de datos
 include "../../../Config/conexionBD.php";
 $Autor = $_GET['Autor'];

 
 //echo "Hola " . $cedula;

 
 //$sql = "SELECT * FROM usuario WHERE usu_eliminado = 'N' and usu_cedula='$cedula'";
 //$sql2 = "SELECT * FROM telefono WHERE usu_cedula='$cedula'";

 $sql4 = "SELECT * FROM Capitulo c, autor a WHERE   c.autor_aut_codigo=a.aut_codigo and a.aut_nombre='$Autor'";
 u.usu_cedula=t.usu_cedula
 
//cambiar la consulta para puede buscar por ocurrencias de letras
 //$result = $conn->query($sql);
 //$result2 = $conn->query($sql2);
 $result3 = $conn->query($sql4);
 

 echo " <table style='width:100%','color: white'>
 <tr>
 <th>Nombre Libro</th>
 <th>Numero Capitulo</th>
 <th>Nombres</th>
 <th>Apellidos</th>
 <th>Telefono</th>
 <th>Tipo</th>
 <th>Operadora</th>
 <th></th>
 <th></th>
 <th></th>
 </tr>";
 
 
 if ($result3->num_rows > 0) {
 while($row1 = $result3->fetch_assoc()) {

 echo "<tr>";
 echo " <td>" . $row1['usu_cedula'] . "</td>";
 echo " <td>" . $row1['usu_correo'] . "</td>";
 echo " <td>" . $row1['usu_nombres'] . "</td>";
 echo " <td>" . $row1['usu_apellidos'] . "</td>";
 echo " <td>" . $row1['tel_numero'] . "</td>";
 echo " <td>" . $row1['tel_tipo'] . "</td>";
 echo " <td>" . $row1['tel_operadora'] . "</td>";
 echo "</tr>";
 
 }
 } else {
 echo "<tr>";
 echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>";
 }
 echo "</table>";
 
 
 $conn->close();

?>
