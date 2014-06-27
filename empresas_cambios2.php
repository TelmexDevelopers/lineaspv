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
      <tr align="center">
        <td align="center">
        <font face="Arial" size="3" color="#00467E"><b>
		REGISTRO MODIFICADO !</b>
        </font>
        </td>
      </tr>
      
      
<?
$id_empresa=$_POST['id_empresa'];
$nombre=$_POST['nombre'];
$strsql = "update empresa set nombre='".$nombre."'  where id_empresa='".$id_empresa."';";
		//echo "query=".$strsql;
		$result = mysql_query($strsql);
?>
    </table>
	</center>
	<p>&nbsp;</p>
	
	<script>
				alert('EL REGISTRO FUE CAMBIADO EXITOSAMENTE ! ');
				location.href="empresas.php";
			</script>
</body>
</html>
