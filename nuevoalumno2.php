
<?
	
	require("includes/conecta.php");
	
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
       REGISTRO
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  <tr valign="middle">
  	<td align=center>
  			
            
            <form name="forma" method="post" action="nuevoalumno3.php">
 
            <table width=400 border="0" cellpadding="0" cellspacing="0">
            
            
            <tr>
			
            	<td width="95"><font face="Arial" size="2" color="#3F92D5"><b>
            		NOMBRE *</font>                </td>
                <td width="237"><INPUT type="text" name="nombre" value="" size="30" maxlength="150" onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();">
            </tr>
            <tr><td><font face="Arial" size="2" color="#3F92D5"><b>
            		MATRICULA ESCOLAR *</font></td>
            <td colspan="3"><INPUT type="text" name="matricula" value="" size="30" maxlength="100"></td></tr>               
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		TELEFONO </font><font face="Arial" size="1" color="#3F92D5"><b><br>(Clave Lada + Numero)</b></font></td>
                <td><input type="text" name="telefono"  value="" size="8" maxlength="16" onKeyUp="this.value = this.value.replace (/[^0-9]/, &#39;&#39;);"><br><br></td>
            </tr>
			<tr><td><font face="Arial" size="2" color="#3F92D5"><b>
            		CORREO ELECTRONICO</font></td>
            <td colspan="3"><INPUT type="text" name="correo_electronico" value="" size="30" maxlength="200"></td></tr>
			<tr>
			<td><font face="Arial" size="2" color="#3F92D5"><b>Servicio</font></td>
							         
									 </td>
									 <?
										$servicio=$_POST['id_servicio'];
										$query2="select * from servicios where id_servicio=".$servicio;
		                                $result2 = mysql_query($query2);
		                               $num_results = mysql_num_rows($result2);
		                               $row=mysql_fetch_array($result2);
		
									?>	
										 
		<td><input type="text" name="servicio" size="30" maxlength="30" value="<? echo $row['nombre'] ?>" readonly="readonly"  /> 
		<input type="hidden" name="id_servicio" value="<? echo $servicio ?>"/>								 
											
																	</td>
			</tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>ESCUELA</font></td>
								
										<?
									   $escuela=$_POST['escuela'];
									   $query3="select * from escuelas where id_escuela=".$escuela;
		                               $result3 = mysql_query($query3);
		                               $num_results2 = mysql_num_rows($result3);
		                               $row2=mysql_fetch_array($result3);
									   ?>
										
		<td><input type="text" name="escuela" size="30" maxlength="30" value="<? echo $row2['nombre'] ?>" readonly="readonly"  />        <input type="hidden" name="escuela_id" value="<? echo $escuela ?>"/></td>
		<tr>
									
							<td><font face=Arial size=2 color=#3F92D5><b>CARRERA</font></td>
							<td>
								
								<SELECT NAME="carrera" SIZE=1>
										
										<?
										$query4="select * from carreras  where id_escuela=".$escuela;
		                                $result4 = mysql_query($query4);
		                                 $num_results4= mysql_num_rows($result4);
										 
											for ($i=0; $i<$num_results4; $i++)
											{	$row4=mysql_fetch_array($result4);
												echo "<OPTION VALUE=".$row4['id_carrera'].">".$row4['nombre']."</option>";
											}
										
										echo"</SELECT>";
										echo "</td></tr>";
										?>
								           
			
           <tr>
			
		
		<td colspan="3" align="center">
		
			<a href="nuevoalumno.php"> <input type="button" value="Regresar"></a>
        
		            &nbsp;&nbsp;&nbsp;&nbsp;
        
		        	<input type="submit" value="Enviar">
        
		            &nbsp;&nbsp;&nbsp;&nbsp;
		
				<input type="reset" value="Limpiar">
        
		          &nbsp;&nbsp;&nbsp;&nbsp;
        
		  
        
		      </td>
        
		    </tr>
            </table>
  	        </form>
		
		</td>
	</tr>
</table>
</body>
</html>
<script>document.forma.aviso.focus();</script>
