<? /*by Technolgy Factory
	MAY 2010			*/
	
    require("includes/conecta.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
	
	<center>
    <P>&nbsp;</P>
	<table width="800"  height="90%" border="0">
      <tr align="center">
        <td align="center">
        <font face="Arial" size="3" color="#00467E"><b>
		REGISTRO GRABADO !</b>
        </font>
        </td>
      </tr>
      
      <tr align="center">
        <td align="center">
        <font face="Arial" size="3" color="#00467E"><b>
		[ 
        <a href="usuario_nuevo1.php">NUEVO REGISTRO</a>         ]</b>
        </font>
        </td>
      </tr>
      
      <tr align="center">
      	<td align="center">
        	<p>&nbsp;</p>
            [ <a href="usuario.php" target="central" style="text-decoration:none">
            	Regresar 
              </a>
            ]
        </td>
      </tr>
	

<?		
$query="insert into usuarios  (nombre,paterno,materno,usuario,clave,email,id_perfil,activo) values (";
$query=$query."'".$_POST["nombre"]."',";
$query=$query."'".$_POST["paterno"]."',";
$query=$query."'".$_POST["materno"]."',";
$query=$query."'".$_POST["usuario"]."',";
$query=$query."'".$_POST["clave"]."',";
$query=$query."'".$_POST["email"]."',";
$query=$query.$_POST["id_perfil"].",1)";

//echo $query;
$result = mysql_query($query);
		
?>
        
    </table>
	</center>
	<p>&nbsp;</p>
</body>
</html>
