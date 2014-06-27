<?

//-----------------------------------------------------
function menu()
//-----------------------------------------------------
{
?>
<div class="horizontalcssmenu">
<ul id="cssmenu1">
<li><a href="menu.php">Inicio</a></li>

<li><a href="cotizadores.php"   target="central">Cotizadores</a></li>

<li><a href="pt.php"  target="central">Parámetros</a>

<li><a href="#">Catálogos</a>
    <ul>
    <li><a href="usuarios.php"  target="central">Usuarios</a></li>
    <li><a href="gc.php" target="central">Gastos de Certificación</a></li>
    </ul>
</li>
<li><a href="salir.php">Salir</a></li>
</ul>
</div>
<?
}


//-----------------------------------------------------
function tot_depositos($id_perfil)
//-----------------------------------------------------
{	
	$query	= "select * from perfil_deposito where id_perfil=". $id_perfil;
	$result	= mysql_query($query);
	$num_results= mysql_num_rows($result);
	return $num_results;
}

//-----------------------------------------------------
function depositos($id_perfil)
//-----------------------------------------------------
{	
	$query	= "select * from perfil_deposito where id_perfil=". $id_perfil;
	$result	= mysql_query($query);
	$num_results = mysql_num_rows($result);
	
	if ($num_results==1)
	{	$cadena = "";
		$row    = mysql_fetch_array($result);
		$cadena = $row['id_deposito'];
	}
	else
	{	$cadena="";
		for ($i=0; $i<($num_results-1); $i++)
		{	
			$row=mysql_fetch_array($result);
			$cadena=$cadena.$row['id_deposito'].",";
		}
		$row=mysql_fetch_array($result);
		$cadena=$cadena.$row['id_deposito'];
	}
	return $cadena;
}






//-----------------------------------------------------
function tot_funcionalidades($id_perfil)
//-----------------------------------------------------
{	
	$query	= "select * from perfil_funcionalidad where id_perfil=". $id_perfil;
	$result	= mysql_query($query);
	$num_results= mysql_num_rows($result);
	return $num_results;
}

//-----------------------------------------------------
function funcionalidades($id_perfil)
//-----------------------------------------------------
{	
	$query	= "select * from perfil_funcionalidad where id_perfil=". $id_perfil;
	//echo "query=".$query;
	$result	= mysql_query($query);
	$num_results = mysql_num_rows($result);
	
	if ($num_results==1)
	{	$cadena = "";
		$row    = mysql_fetch_array($result);
		$cadena = $row['id_funcionalidad'];
	}
	else
	{	$cadena="";
		for ($i=0; $i<($num_results-1); $i++)
		{	
			$row=mysql_fetch_array($result);
			$cadena=$cadena.$row['id_funcionalidad'].",";
		}
		$row=mysql_fetch_array($result);
		$cadena=$cadena.$row['id_funcionalidad'];
	}
	return $cadena;
}









//-----------------------------------------------------
function validadores()
//-----------------------------------------------------
{	?>
		<script LANGUAGE="JavaScript">
				function numerico(e)
				{	var key; 
					var keychar;
					if (window.event)
					   key = window.event.keyCode;
					else if (e)
					   key = e.which;
					else
					   return true;
					keychar = String.fromCharCode(key);
					keychar = keychar.toLowerCase();
					if ((key==null) || (key==0) || (key==8) || (key==9) || (key==27) )
					   return true;
					else if ((("1234567890").indexOf(keychar) > -1))
					   return true;
					else
					   return false;
				}
				
				function alfanumerico(e)
				{
					var key;
					var keychar;
					if (window.event)
					   key = window.event.keyCode;
					else if (e)
					   key = e.which;
					else
					   return true;
					keychar = String.fromCharCode(key);
					keychar = keychar.toLowerCase();
					// control keys
					if ((key==null) || (key==0) || (key==8) ||
						(key==9) || (key==27) )
					   return true;
				
					// alphas and numbers
					else if ((("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz 1234567890áéíóú").indexOf(keychar) > -1))
					   return true;
					else
					   return false;
				}
				
				
				
				
				function alfabetico(e)
				{
					var key;
					var keychar;
					if (window.event)
					   key = window.event.keyCode;
					else if (e)
					   key = e.which;
					else
					   return true;
					keychar = String.fromCharCode(key);
					keychar = keychar.toLowerCase();
					// control keys
					if ((key==null) || (key==0) || (key==8) ||
						(key==9) || (key==27) )
					   return true;
				
					// alphas and numbers
					else if ((("ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyzáéíóú").indexOf(keychar) > -1))
					   return true;
					else
					   return false;
				}
				
		</script>

<?
}	
?>


