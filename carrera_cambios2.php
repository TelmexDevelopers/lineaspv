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
$id_carrera=$_POST['id_principal'];
$nombre=$_POST['carrera'];
$strsql = "update carreras set nombre='".$nombre."'  where id_carrera='".$id_carrera."';";
		//echo "query=".$strsql;
		$result = mysql_query($strsql);
?>
    </table>
	</center>
	<p>&nbsp;</p>
	
	<script>
				alert('EL REGISTRO FUE CAMBIADO EXITOSAMENTE ! ');
				location.href="carreras.php";
			</script>
</body>
</html>
