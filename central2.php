
<? /*by Technolgy Factory	*/
	
    require("includes/conecta.php");
?>


<?

$nombre=$_POST['nombre'];
$matricula=$_POST['matricula'];
$carrera=$_POST['carrera'];
$escuela=$_POST['escuela_id'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo_electronico'];
$servicio=$_POST['id_servicio'];
$fecha=date("d/m/y");
$activo=0;

if(empty($validar))  

if( (empty($nombre))&&empty ($matricula))
{

echo"<body><center><P>&nbsp;</P>
	<table width=800  height=90% border=0>
      <tr align=center>
        <td align=center>
        <font face=Arial size=2 color=#00467E><b>
		Datos Incompletos, por favor ingrese completo sus datos</b>
        </font>
        </td>
      </tr>
      <tr align=center>
       <td align=center>
       <font face=Arial size=2 color=#00467E><b><a href=index2.php>REGRESAR</a></b>
        </font>
        </td>
      </tr>
      <tr align=center>
      	<td align=center>
        	<p>&nbsp;</p>
        </td></tr></table></center><p>&nbsp;</p></body>";

}

else 

{

$strsql = "insert into alumnos(nombre,matricula,id_carrera,id_escuela,id_servicio,correo_electronico,telefono,fecha_automatica,activo) values ('".$nombre."','".$matricula."','".$carrera."','".$escuela."','".$servicio."','".$correo."','".$telefono."','".$fecha."','".$activo."');";
//		echo "query=".$strsql;
		$result = mysql_query($strsql) or die("FALLA");
		
//echo $query;
$result = mysql_query($query);

mysql_close();


echo"
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
        <font face=Arial size=3 color=#00467E><b>
		GRACICAS POR SU REGISTRO!</b>
        </font>
        </td>
      </tr>
      
      <tr align=center>
        <td align=center>
        <font face=Arial size=3 color=#00467E><b>
		[ 
        <a href=index2.php>REGRESAR</a>         ]</b>
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
