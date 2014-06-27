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
$id_escuela=$_POST['id_escuela'];
$nombre=$_POST['nombre'];
$strsql = "update escuelas set nombre='".$nombre."'  where id_escuela='".$id_escuela."';";
		//echo "query=".$strsql;
		$result = mysql_query($strsql);
?>
    </table>
	</center>
	<p>&nbsp;</p>
	
	<script>
				alert('EL REGISTRO FUE CAMBIADO EXITOSAMENTE ! ');
				location.href="escuelas.php";
			</script>
</body>
</html>
