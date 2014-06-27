
<?

	require("includes/conecta.php");
	$id_principal1=$_GET['id_principal_0'];
	//echo $id_principal1;
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script language="javascript">
<SCRIPT> 
function validarSiNumero(numero)
{
if (!/^([0-9])*$/.test(numero))
alert("El valor " + numero + " no es un número");
}
function validar()
{ 
if(/[^aA-zZ]/.test(document.formulario.campo.value)) return false;
return true;
} 
</SCRIPT> 

</script>
<body>
<center>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  
  
  <tr>
  	<td align="center"><br>
		<font face="Arial" size="3" color="#00467E"><b>
       MODIFICACION DE INSTITUCION Y SERVICIO
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="center">Selecciona el nombre de la institucion , seleccionando si deseas practicas<br> profesionales  o servicio social</td>
  </tr>
  
  <tr>
  	<td align=center>
  			
            
            <form name="forma" method="post" action="alumnos_seccion_cambios2.php">
			<input type="hidden" name="id_principal2" value="<? echo $id_principal1;?>">
 
            <table width=400 border="0" cellpadding="0" 
            cellspacing="0">
            
       	<tr>
			<td><font face="Arial" size="2" color="#3F92D5"><b>SOLICITA</font></td>
								<td><SELECT NAME="id_servicio" SIZE="1">
										<?
										$query2="select * from servicios order by nombre;";
		                                $result2 = mysql_query($query2);
		                                 $num_results2 = mysql_num_rows($result2);
											for ($i=0; $i<$num_results2; $i++)
											{	$row=mysql_fetch_array($result2);
												echo "<OPTION VALUE=".$row['id_servicio'].">".$row['nombre']."</option>";
											}
										?>
									</SELECT>								</td>
			</tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>ESCUELA</font></td>
								<td>
								<? echo "<SELECT NAME=escuela SIZE=1>" ?>
										<?
										$query2="select * from escuelas order by nombre;";
		                                $result2 = mysql_query($query2);
		                                 $num_results2 = mysql_num_rows($result2);
											for ($i=0; $i<$num_results2; $i++)
											{	$row=mysql_fetch_array($result2);
												echo "<OPTION VALUE=".$row['id_escuela'].">".$row['nombre']."</option>";
											}
										
										echo"</SELECT>";
										echo "</td></tr>";
										
										
										?>
								           
			
            <tr>
			<td colspan="3" align="center">
		
			<a href="alumnos.php"> <input type="button" value="Regresar"></a>
			</td>
            	<td colspan="3" align="center">
                	<input type="submit" value="Continuar"></td>
            
        
			</tr>
			
            </table>
			<? mysql_close(); ?>
  	        </form>
		</td>
	</tr>
</table>
</body>
</html>
<script>document.forma.aviso.focus();</script>
