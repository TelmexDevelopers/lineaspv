
<? /*by Technolgy Factory	*/
	
	require("includes/conecta.php");
	
?>


<?


$carrera=$_POST['carrera'];
$id_principal4=$_POST['id_principal3'];
$escuela=$_POST['escuela_id'];

$servicio=$_POST['id_servicio'];
$fecha=date("d/m/y");
$activo=0;

$strsql = "update alumnos set id_carrera='".$carrera."', id_escuela='".$escuela."' , id_servicio='".$servicio."', fecha_automatica='".$fecha."',  activo='".$activo."' where id_nombre='".$id_principal4."';";
		//echo "query=".$strsql;
		$result = mysql_query($strsql);
		?>
<body><center><P>&nbsp;</P>
	<table width=800  height=90% border=0>
            <tr align=center>
      	<td align=center>
        	<p>&nbsp;</p>
        </td></tr></table></center><p>&nbsp;</p></body>
		
<html>
<head>
<meta http-equiv=Content-Type content=text/html; charset=utf-8 />
<title></title>
</head>
<body>
<center><P>&nbsp;</P>
	<table width=800  height=90% border=0>
	
      <tr align=center>
        <td align=center>
        
        </font>
        </td>
      </tr>
      	<script>
				alert('EL REGISTRO FUE CAMBIADO EXITOSAMENTE ! ');
				location.href="alumnos.php";
			</script>
      <tr align=center>
        <td align=center>
        <font face=Arial size=3 color=#00467E><b>
		[ 
        <a href=alumnos.php>REGRESAR</a>         ]</b>
        </font>
        </td>
      </tr>
      
      <tr align=center>
      	<td align=center>
        	<p>&nbsp;</p>
            
        </td>
      </tr>
	

        
    </table>
	</center>
	<p>&nbsp;</p>
</body>";
}
?>

</html>
