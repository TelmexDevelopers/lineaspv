<? 	
require("includes/partes.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">

<html>

<head>
	<title>.:TELMEX - Control de Lineas Privadas:.</title>
	<link rel="shortcut icon" href="images/favicon.ico"/
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<meta name="description" content="VCS" />
	<script language="javascript">
	setInterval ("window.status = 'Vehicle Control System'",5);
		
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


    <?	validadores();?>
    <link rel="stylesheet" href="menu_style.css" type="text/css" />
</head>
 
<body background="images/bg.gif" topmargin="0" onLoad="muestraReloj()">
<!-- body background="images/body_back.jpg" topmargin="0" onLoad="muestraReloj()"-->
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
                        <img src="images/logo.png" width="216" height="99" border="0">                    </td>
                    <td align="right">
                  			<h1>CONTROL DE LINEAS PRIVADAS</h1> &nbsp;<br>
			                <font face=verdana size="2">
                             	<b><?	echo date("d-");
										$mes=date("m");
										switch ($mes) 
										{	case "01": echo "Enero";break;
											case "02": echo "Febrero";break;
											case "03": echo "Marzo";break;
											case "04": echo "Abril";break;
											case "05": echo "Mayo";break;
											case "06": echo "Junio";break;
											case "07": echo "Julio";break;
											case "08": echo "Agosto";break;
											case "09": echo "Septiembre";break;
											case "10": echo "Octubre";break;
											case "11": echo "Noviembre";break;
											case "12": echo "Diciembre";break;
										}
										echo date("-y");
									?>
                                    
                                </b>
                            </font> 
                  			&nbsp;&nbsp;
                  			<span align="right" id="spanreloj"></span>
                  			&nbsp;
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
                    </ul>
                    </div>
                	</td>
            	</tr>
            	
            	
            	
            	
            	
            	
            	<!-- Panel CENTRAL  AQUI VA TODO EL CONTENIDO A DESPLEGAR -->
            	<tr>
            	
                    <!-- Panel CENTRAL IZQUIERDO -->
                    <td width="200" height="450" align="center">
                        <iframe name="izq1" src="admin.php" frameborder=1 
                         align="middle" width="200" height="450" 
                         scrolling="no" marginwidth="0" marginheight="0">&nbsp;
                        </iframe>
                    </td>
                    
                    
                    
                    
                    <!-- Panel CENTRAL  AQUI VA TODO EL CONTENIDO A DESPLEGAR -->
                    <td width="760" height="450" align="center">
                        <iframe name="central" src="central.php" frameborder=1 
                         align="middle" width="760" height="450" 
                         scrolling="no" marginwidth="0" marginheight="0">&nbsp;
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
            <b>by Telmex 2014 <?php echo date("h:i:s a"); ?> <? echo $_SERVER['REMOTE_ADDR']; ?> </b></font></a>&nbsp;&nbsp;
        </td>
    </tr>
	</table>
    
</td>
</tr>
</table>
</body>
</html>