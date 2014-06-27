<? /*by Technolgy Factory
	MAY 2010			*/
	session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title></title>
</head>

<body>
	
	<center>
    <P>&nbsp;</P>
	<table width="800"  height="90%" border="0">
      
      
<?

$id_actividad=$_POST['id_principal'];

$actividad=$_POST['actividad'];
$nombre_jefe=$_POST['nombre_jefe'];

$puesto=$_POST['puesto'];



$strsql = "update actividades_empresa set actividad='".$actividad."', nombre_jefe='".$nombre_jefe."', puesto='".$puesto."' where id_actividad='".$id_actividad."';";
		//echo "query=".$strsql;
		$result = mysql_query($strsql);
?>
    </table>
	</center>
	<p>&nbsp;</p>
	
	<script>
				alert('EL REGISTRO FUE CAMBIADO EXITOSAMENTE ! ');
				location.href="actividades.php";
			</script>
</body>
</html>
