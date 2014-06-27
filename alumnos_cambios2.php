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
      	<script>
				alert('EL REGISTRO FUE CAMBIADO EXITOSAMENTE ! ');
				location.href="alumnos.php";
			</script>
	  <tr align="center">
        <td align="center">
        <font face="Arial" size="3" color="#00467E"><b>
		REGISTRO MODIFICADO !</b>
        </font>
        </td>
      </tr>
      
      <tr align="center">
      	<td align="center">
        	<p>&nbsp;</p>
            
        </td>
      </tr>

<?
$id_principal=$_POST['id_principal'];
$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$telefono=$_POST['telefono'];
$correo_electronico=$_POST['correo_electronico'];
$fecha=date("d/m/y");

$strsql = "update alumnos set nombre='".$nombre."', matricula='".$matricula."', telefono='".$telefono."' , correo_electronico='".$correo_electronico."', fecha_automatica='".$fecha."'  where id_nombre='".$id_principal."';";
		//echo "query=".$strsql;
		$result = mysql_query($strsql);



		
?>
    </table>
	</center>
	<p>&nbsp;</p>

</body>
</html>
<script>
{
	top.izquierdo.location="izq1.php";
}
</script>
