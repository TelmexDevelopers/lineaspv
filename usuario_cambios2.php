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
		REGISTRO MODIFICADO !</b>
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

$query="update usuarios set nombre='".$_POST["nombre"]."',";
$query=$query."paterno='".$_POST["paterno"]."',";
$query=$query."materno='".$_POST["materno"]."',";
$query=$query."usuario='".$_POST["usuario"]."',";
$query=$query."clave='".$_POST["clave"]."',";
$query=$query."email='".$_POST["email"]."',";
$query=$query."id_perfil=".$_POST["id_perfil"].",";
$query=$query."activo=".$_POST["activo"];
$query=$query." where id_usuario=".$_POST["id_usuario"];

//echo $query;
$result = mysql_query($query);
		
?>
        
    </table>
	</center>
	<p>&nbsp;</p>
</body>
</html>
