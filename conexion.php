<?php
 $con = mysqli_connect("localhost", "root", "bbmcelaya", "base_registros");
 
if(isset($_REQUEST['guardar']))
{
	 $query = "INSERT INTO registro(fecha, nombre_reporta, cargo, nombre_cadete, matricula, grado, grupo, clasificacion, descripcion, medidas) 
				VALUES ('".$_GET["fecha_"]."', '".$_GET["nombrereporta"]."', '".$_GET["cargo_"]."', '".$_GET["nombrecadete"]."', '".$_GET["matricula_"]."', '".$_GET["id_grados"]."', '".$_GET["id_grupos"]."', '".$_GET["clasificacion"]."', '".$_GET["descripcion_"]."', '".$_GET["medidas_atencion"]."')";
	//echo $query;


	 mysqli_query($con, $query);
		echo("<script>");
		echo("alert('Se Envio el Reporte Correctamente');");
		echo("document.location=('index.php');");
		echo("</script>");
}
else
{
	$query = "INSERT INTO registro(fecha, nombre_reporta, cargo, nombre_cadete, matricula, grado, grupo, clasificacion, descripcion, medidas) 
				VALUES ('".$_GET["fecha_"]."', '".$_GET["nombrereporta"]."', '".$_GET["cargo_"]."', '".$_GET["nombrecadete"]."', '".$_GET["matricula_"]."', '".$_GET["id_grados"]."', '".$_GET["id_grupos"]."', '".$_GET["clasificacion"]."', '".$_GET["descripcion_"]."', '".$_GET["medidas_atencion"]."')";
	//echo $query;


	 mysqli_query($con, $query);
		echo("<script>");
		echo("alert('Se Envio el Reporte Correctamente');");
		echo("document.location=('registro.php');");
		echo("</script>");
}

