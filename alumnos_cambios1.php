<?
    session_start();
	require("includes/conecta.php");
	require("includes/sesion.php");
	
	
   $id_principal=$_GET['id_nombre'];
   
 $query  = "select * from alumnos where id_nombre=".$id_principal;
	$result = mysql_query($query);
	$row	= mysql_fetch_array($result);
	
	$matricula=$row['matricula'];
	$nommbre_enviado=$row['nombre'];
	$matricula=$row['matricula'];
	$carrera=$row['id_carrera'];
	$escuela=$row['id_escuela'];
	$correo_electronico=$row['correo_electronico'];
	$id_servicio=$row['id_servicio'];
	$telefono=$row['telefono'];
	$fecha_automatica=$row['fecha_automatica'];
		
		
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<script language="javascript">
 
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
<body>
<center>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  
  
  <tr>
  	<td align="center"><br>
		<font face="Arial" size="3" color="#00467E"><b>
       CAMBIO A ALUMNOS
        </b></font><BR>
	</td>
  </tr>

  <tr>
  	<td align="right">&nbsp;</td>
  </tr>
  
  <tr valign="middle">
  	<td align=center>
  			
            
            <form name="forma" method="post" action="alumnos_cambios2.php">
			 <input type="hidden" name="id_principal1" value="<? echo $id_principal;?>">
 
            <table width=400 border="0" cellpadding="0" cellspacing="0">
            <tr>
			<td width="95"><font face="Arial" size="2" color="#3F92D5"><b>
            		ID </font>                </td>
			 <?
			echo "<td>";
						echo "<font face='Arial' size=2 color=#3F92D5> &nbsp; <b>";
						echo $id_principal;
						echo "</font></a></td>";
		?>
			</tr>
            
            <tr>
			
            	<td width="95"><font face="Arial" size="2" color="#3F92D5"><b>
            		NOMBRE *</font>                </td>
                <td width="237"><INPUT type="text" name="nombre" value="<? echo $nommbre_enviado ?> " size="30" maxlength="150" onkeypress='return alfanumerico(event)' Onblur="this.value = this.value.toUpperCase();">
            </tr>
            <tr><td><font face="Arial" size="2" color="#3F92D5"><b>
            		MATRICULA ESCOLAR *</font></td>
            <td colspan="3"><INPUT type="text" name="matricula" value="<? echo $matricula ?>" size="30" maxlength="100"></td></tr>               
            <tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>
            		TELEFONO </font><font face="Arial" size="1" color="#3F92D5"><b><br>(Clave Lada + Numero)</b></font></td>
                <td><input type="text" name="telefono"  value="<? echo $telefono ?>" size="8" maxlength="16" onKeyUp="this.value = this.value.replace (/[^0-9]/, &#39;&#39;);"><br><br></td>
            </tr>
			<tr><td><font face="Arial" size="2" color="#3F92D5"><b>
            		CORREO ELECTRONICO</font></td>
            <td colspan="3"><INPUT type="text" name="correo_electronico" value="<? echo $correo_electronico ?>" size="30" maxlength="200"></td></tr>
			<tr>
			<td><font face="Arial" size="2" color="#3F92D5"><b>Servicio</font></td>
							         </td>
									 <?
										
										$query2="select * from servicios where id_servicio=".$id_servicio;
		                                $result2 = mysql_query($query2);
		                               $num_results = mysql_num_rows($result2);
		                               $row2=mysql_fetch_array($result2);
									   $nombre2=$row2['nombre'];
		
									?>	
										 
		<td><input type="text" name="servicio" size="30" maxlength="30" value="<? echo $nombre2 ?>" readonly="readonly"  /> 
										 
											
																	</td>
																	<?
		                echo "<td>";
						echo "<font face='Arial' size=2>&nbsp;";
						echo "<a href='alumnos_seccion_cambios1.php?id_principal_0=".$id_principal."'>";
                    	echo "[MODIFICAR]</font>";
						echo "</a></td>";
						?>
			</tr><tr>
            	<td><font face="Arial" size="2" color="#3F92D5"><b>ESCUELA</font></td>
								
										<?
									   
									   $query3="select * from escuelas where id_escuela=".$escuela;
		                               $result3 = mysql_query($query3);
		                                 $num_results3= mysql_num_rows($result3);
										 $row3=mysql_fetch_array($result3);
									   
									   $nomb_escuela=$row3['nombre'];
									   ?>
										
		<td><input type="text" name="escuela" size="30" maxlength="30" value="<? echo $nomb_escuela ?>" readonly="readonly"  />
		</td>
						
		</tr>
		<tr> <td><font face=Arial size=2 color=#3F92D5><b>CARRERA</b></font></td>
							<td>
										<?
										$query4="select * from carreras  where id_carrera=".$carrera;
		                                $result4 = mysql_query($query4);
		                                $num_results4= mysql_num_rows($result4);
										$row4=mysql_fetch_array($result4);
										$carrera_nomb=$row4['nombre'];
										 ?>
	<input type="text" name="carrera" size="30" maxlength="30" value="<? echo $carrera_nomb ?>" readonly="readonly"  /></td></tr>   
			
           <tr>
			
		
		<td colspan="3" align="center">
		
			<a href="alumnos.php"> <input type="button" value="Regresar"></a>
        
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

