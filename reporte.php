<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>REPORTE DE INCIDENCIAS</title>
	
		<link href="css/bootstrap-4.4.1.css" rel="stylesheet" type="text/css">

</head>

<body>
<table width="100%" border="0">
  <tbody>
    <tr>
      <th width="25%" height="278" scope="row"><img src="18.jpeg" width=200px height=200px></th>
		
      <td width="50%"><h1 style="text-align: center">Bachillerato Bivalente Militarizado</h1>
      <h1 style="text-align: center">&quot;Batallón Primer Ligero&quot;</h1></td>
		
      <th width="25%" scope="row"><img src="logo1.png" width=225px height=225px></th>
    </tr>
  </tbody>
	
<br><br>

</table>
	<h1 style="text-align: center">REPORTE DE INCIDENCIAS</h1>
<form action="conexion.php" method="_GET">
<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "bbmcelaya";
    $dbname = "base_registros";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

	if(isset($_REQUEST["cadete"]))
	{
		$nombre_a_buscar = $_REQUEST['nombre'];

		
		/*$sql = "SELECT * FROM registro WHERE nombre_cadete LIKE '%$nombre_a_buscar%'";*/
		$sql = "SELECT * FROM registro WHERE nombre_cadete = '$nombre_a_buscar'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

			$color = "#0000FF";
			echo "<p style='color: $color; font-size:30px; text-align: center; font-weight: bold;'>SE ENCONTRO UN REPORTE:</p>";
			while($row = $result->fetch_assoc()) {
				$fecha = $row["fecha"];
				$nombre_reporta = $row["nombre_reporta"];
				$cargo = $row["cargo"];
				$nombre_cadete = $row["nombre_cadete"];
				$matricula = $row["matricula"];
				$grupo = $row["grado"].$row["grupo"];
				$clasificacion = $row["clasificacion"];
				$descripcion = $row["descripcion"];
				$medidas = $row["medidas"];
			}
		} 
	else {
		$color = "#FF0000";
		echo "<p style='color: $color; font-size:30px; text-align: center'>No se encontraron resultados para: <strong> $nombre_a_buscar </strong></p>";

		}

		$conn->close();
}
//}
?>

<?php
//if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "bbmcelaya";
    $dbname = "base_registros";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

	if(isset($_REQUEST["mat"]))
	{
		$matricula = $_POST['matricula'];


		$sql = "SELECT * FROM registro WHERE matricula = '$matricula'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$color = "#0000FF";
			echo "<p style='color: $color; font-size:30px; text-align: center; font-weight: bold;'>SE ENCONTRO UN REPORTE:</p>";
			while($row = $result->fetch_assoc()) {
				$fecha = $row["fecha"];
				$nombre_reporta = $row["nombre_reporta"];
				$cargo = $row["cargo"];
				$nombre_cadete = $row["nombre_cadete"];
				$matricula = $row["matricula"];
				$grupo = $row["grado"].$row["grupo"];
				$clasificacion = $row["clasificacion"];
				$descripcion = $row["descripcion"];
				$medidas = $row["medidas"];
			}
		}
	  else {
		$color = "#FF0000";
		echo "<p style='color: $color; font-size:30px; text-align: center'>No se encontraron resultados para: <strong> $matricula </strong></p>";

		
		}

		// Cerrar conexión
		$conn->close();
	}
//}

?>
	<table width="70%" height="376" border="1" align="center">
		<tr>
	  <th colspan="2" bgcolor="#FFFFFF" style="text-align: left" scope="row">FECHA:<input type="date" name="fecha_" value= <?php echo $fecha;?>></th></tr>
	    <tr>
	      <th colspan="2" bgcolor="#9A9A9A" scope="row">DATOS DE QUIEN REPORTA</th>
        </tr>
	    <tr>
	      <th colspan="2" bgcolor="#FFFFFF" style="text-align: left" scope="row">NOMBRE:  <?php echo $nombre_reporta;?><span style="text-align: center">
	     
	         </span></th>
        </tr>
		  <br><br>
	    <tr>
	      <th colspan="2" style="text-align: left" scope="row">CARGO: <?php echo $cargo;?><span style="text-align: center">
	      
	         </span></th>
        </tr>
		  
	    <tr>
	      <th colspan="2" bgcolor="#9A9A9A" style="text-align: center" scope="row">DATOS DEL CADETE</th>
        </tr>
	    <tr>
			  
	      <th width="56%" style="text-align: left" scope="row">NOMBRE: <?php echo $nombre_cadete;?><span style="text-align: center">
	      <th width="44%" style="text-align: left" scope="row">GRUPO: <?php echo $grupo;?><span style="text-align: center">
			 <label ></label>
			  </span>
        </tr>
	    <tr>
	      <th colspan="2" style="text-align: left" scope="row">MATRICULA:<span style="text-align: center">
			  <input type="text" name="matricula_" size="30" maxlength="500" id="imatricula_" required="required" value= <?php echo $matricula;?>> </span></th>
        </tr>
	    <tr>
	      <th colspan="2" bgcolor="#9A9A9A" scope="row">CLASIFICACIÓN DEL INCIDENTE</th>
        </tr>
	    <tr>
			<td colspan="2" align="center">
			<?php echo $clasificacion;?></td>
        </tr>
		<tr>
	      <th colspan="2" bgcolor="#9A9A9A" scope="row">DESCRIPCIÓN DE HECHOS</th>
        </tr>
		<tr>
		<tr>
	      <th colspan="2" scope="row"><p style="text-align: center">
		<textarea name= "descripcion_" rows="5" cols=110  ><?php echo $descripcion;?></textarea></p>
		</th>
		</tr>
		<th colspan="2" bgcolor="#9A9A9A" scope="row">MEDIDAS DE ATENCION Y SEGUIMIENTO</th>
		<tr>
	      <th colspan="2" scope="row"><p style="text-align: center">
		<textarea name= "medidas_atencion" rows="5" cols=110  ><?php echo $medidas;?></textarea></p>
		</th>
        </tr>
		
</table>

		<h1 align="center">
		
		</h1>
</form>
<table border=0 align="center">
	<tr>
		<td width="250px" align="center"><a href = consulta.php><input type="button" value="Realizar nueva busqueda"></a></td>
		<td><input type="button" value="Imprimir" onclick="window.print();"></td>
		
	</tr>
</table>
</body>
</html>
