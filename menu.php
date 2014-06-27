<? 	session_start();
require("includes/conecta.php");
require("includes/partes.php");
require("includes/sesion.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">

<html>

<head>
	<title>.:.:TELMEX - Control de Lineas Privadas:.:.</title>
	<link rel="shortcut icon" href="images/favicon.ico"/
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="description" content="TMX" />
		<script language="javascript">
	setInterval ("window.status = 'Control System'",5);
		
		function muestraReloj()
		{	// Compruebo si se puede ejecutar el script en el navegador del usuario
			if (!document.layers && !document.all && !document.getElementById) return;
			// Obtengo la hora actual y la divido en sus partes
			var fechacompleta = new Date();
			var horas = fechacompleta.getHours();
			var minutos = fechacompleta.getMinutes();
			var segundos = fechacompleta.getSeconds();
			var mt = "AM";
			// Pongo el formato 12 horas
			if (horas > 12) 
			{	mt = "PM";
				horas = horas - 12;
			}
			if (horas == 0) horas = 12;
			// Pongo minutos y segundos con dos dígitos
			if (minutos <= 9) minutos = "0" + minutos;
			if (segundos <= 9) segundos = "0" + segundos;
			// En la variable 'cadenareloj' puedes cambiar los colores y el tipo de fuente
			cadenareloj = "<font size='2' face='verdana' ><b>" + horas + ":" + minutos + ":" + segundos + " " + mt + "</b></font>";
			// Escribo el reloj de una manera u otra, según el navegador del usuario
			if (document.layers) 
			{	document.layers.spanreloj.document.write(cadenareloj);
				document.layers.spanreloj.document.close();
			}
			else if (document.all) spanreloj.innerHTML = cadenareloj;
			else if (document.getElementById) document.getElementById("spanreloj").innerHTML = cadenareloj;
			// Ejecuto la función con un intervalo de un segundo
			setTimeout("muestraReloj()", 1000);
		}
</script>
    <link rel="stylesheet" href="menu_style.css" type="text/css" />
</head>

<!--body background="images/body_back.jpg" topmargin="0" onload="muestraReloj()"-->
<body background="images/bg.gif" topmargin="0" onload="muestraReloj()">
<center>

<!-- Tabla de Afuera -->
<table width="100%" height="100%" border="0" 
cellpadding="0" cellspacing="0">
<tr valign="middle">
	<td align="center" valign="middle">
		
		<table bgcolor="#FFFFFF" bordercolor="black" border="0" 
        width="973" cellpadding="0" cellspacing="0">
		<tr valign="middle">
			<td valign="middle">
                
                <table width="970" border="0" 
                cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left">
                        <img src="images/logo.png" width="216" height="99" border="0">     
                    </td>
                    <td align="right">
                  			<h1>CONTROL DE LINEAS PRIVADAS</h1> &nbsp;<br>
			                <font face=verdana size="2">
                             	<b><?	echo date("d/");
										$mes=date("m");
										switch ($mes) 
										{	case "01": echo "Ene";break;
											case "02": echo "Feb";break;
											case "03": echo "Mar";break;
											case "04": echo "Abr";break;
											case "05": echo "May";break;
											case "06": echo "Jun";break;
											case "07": echo "Jul";break;
											case "08": echo "Ago";break;
											case "09": echo "Sep";break;
											case "10": echo "Oct";break;
											case "11": echo "Nov";break;
											case "12": echo "Dic";break;
										}
										echo date("/Y");
									?>
                                    
                                </b>
                            </font> 
                  			&nbsp;&nbsp;
                  			<span align="right" id="spanreloj"></span>
                  			&nbsp;&nbsp;
                    </td>
				</tr>
                </table>
			</td>
		</tr>
		
		<!-- SECCION DE TRABAJO -->
		<tr>
    		<td align="left">
			
                <table bgcolor="#FFFFFF" bordercolor="black" border="1" 
                width="973" cellpadding="0" cellspacing="0">
                <tr>
                    <!-- LADO IZQUIERDO -->
                    <td width="200">
                        <div><ul class="menu">&nbsp;</ul></div>
                    </td>
                	
                    
                    
                    
                    
                    
                    
                    
                    
                    
                	<!-- Panel Superior   AQUI VA EL MENU -->
					<td width="760" height="20" align="center">
                    <div>
                    <ul class="menu">
                    
                    
                    <?
					$query = "select f.nombre, f.pagina, m.menu ";
                    $query = $query."from funcionalidades f, menus m ";
					$query = $query."where m.id_menu=f.id_menu ";
					$query = $query."and f.activo=1 ";
					$query = $query."and f.id_funcionalidad in (";
					$query = $query.$_SESSION['funcionalidades'].")";
					
					$result 	 = mysql_query($query);
					$num_results = mysql_num_rows($result);
					$menu_ant = "";
					$abierto  = 0;
					if ($num_results>0)
					{
					for ($i=0; $i<$num_results; $i++)
					{	
						$row=mysql_fetch_array($result);
						
						if ($row['menu']<>$menu_ant)
						{	if ($abierto==1)
							{	echo "</ul></li>";
								$abierto=0;
							}
							echo "<li class='top'><a href='#' class='top_link'>";
							echo "<span>".$row['menu']."</span></a>";
                            echo "<ul class='sub'>";
							$abierto=1;
							$menu_ant=$row['menu'];
						}
                        echo "<li> <a href='".$row['pagina']."' target='central'>";
						echo $row['nombre']."</a></li>";
					}
					if ($abierto==1)
					{	echo "</ul></li>";
						$abierto=0;
					}
					}
                ?>      
                        <li class="top"><a href="salir.php" class="top_link">
                        	<span>Salir</span></a></li>
                    </ul>
                    </div>
                	</td>
            	</tr>
            	
            	
            	
            	
            	
            	
            	<!-- Panel CENTRAL  AQUI VA TODO EL CONTENIDO A DESPLEGAR -->
            	<tr>
            	
                    <!-- Panel CENTRAL IZQUIERDO -->
                    <td width="200" height="450" align="center">
                        <iframe name="izquierdo" src="izq1.php" frameborder=1 
                         align="middle" width="200" height="450" 
                         scrolling="no" marginwidth="0" marginheight="0">&nbsp;
                        </iframe>
                    </td>
                    
                    
                    
                    
                    <!-- Panel CENTRAL  AQUI VA TODO EL CONTENIDO A DESPLEGAR -->
                    <td width="760" height="450" align="center">
                        <iframe name="central" src="blank.php" frameborder=1 
                         align="middle" width="760" height="450" 
                         scrolling="auto" marginwidth="0" marginheight="0">&nbsp;
                        </iframe>
                    </td>
                </tr>
            	</table>
			</td>
		</tr>
	</table>
    <table border="0" width="973" cellpadding="0" cellspacing="0">
    <tr><td align="right">
            <a href="http://www.telmex.com" target="_blank" 
            style="text-decoration:none;">
            <font face=arial size=1 color="yellow">
            <b>by Telmex 2014</b></font></a>&nbsp;&nbsp;
        </td>
    </tr>
	</table>
    
</td>
</tr>
</table>
</body>
</html>