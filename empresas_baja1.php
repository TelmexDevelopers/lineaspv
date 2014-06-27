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
  	<td align="center"><br>
		<font face="Arial" size="3" color="#00467E"><b>
        BAJA DE EMPRESA
        </b></font><BR>
	</td>
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
$id_empresa=$_GET['id_empresa'];
		
		$strsql = "delete from empresa where id_empresa=".$id_empresa;
		// echo "query=".$strsql;
		$result = mysql_query($strsql);
		
		?>	
		<script>
				alert('EL REGISTRO FUE ELIMINADO EXITOSAMENTE ! ');
				location.href="empresas.php";
			</script>

		
</center>
</body>
</html>
