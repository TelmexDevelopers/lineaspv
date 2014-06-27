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
		REGISTRO GRABADO !</b>
        </font>
        </td>
      </tr>
      
      <tr align="center">
        <td align="center">
              </tr>
      
      
<?		
$servicio=$_POST['servicio'];
$query="insert into servicios (nombre) values ('".$servicio."')";

//echo $query;
$result = mysql_query($query);
?>
<script>
				alert('EL REGISTRO FUE CREADO EXITOSAMENTE ! ');
				location.href="servicios.php";
			</script>
		

        
    </table>
	</center>
	<p>&nbsp;</p>
</body>
</html>
