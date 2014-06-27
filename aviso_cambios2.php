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
      
      <tr align="center">
      	<td align="center">
        	<p>&nbsp;</p>
            [ <a href="aviso.php" target="central" style="text-decoration:none">
            	Regresar 
              </a>
            ]
        </td>
      </tr>

<?

$query="update avisos set aviso='".$_POST["aviso"]."',";
$query=$query."activo=".$_POST["activo"];
$query=$query." where id_aviso=".$_POST["id_aviso"];
//echo $query;

$result = mysql_query($query);
		
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
