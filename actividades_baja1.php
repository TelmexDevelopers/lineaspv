<?
		session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
<center>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr valign=top>
  	
  </tr>
  
  <tr valign=top>
  	<td align="right">
		<font face="Arial" size="3" color="#00467E"><b>
        &nbsp;
        </b></font>
</td>
</tr>
</table>
<?
$id_actividad=$_GET['id_actividad'];
		
		$strsql = "delete from actividades_empresa where id_actividad=".$id_actividad;
		// echo "query=".$strsql;
		$result = mysql_query($strsql);
		
		?>	
		
		
</center>
<script>
				alert('EL REGISTRO FUE ELIMINADO EXITOSAMENTE ! ');
				location.href="actividades.php";
			</script>

</body>
</html>
