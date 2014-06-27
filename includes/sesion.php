<?	
	if ($_SESSION["autentificado"] != "SI") 
	{	echo "<head><meta http-equiv='Content-Type' content='text/html; charset=utf-8'></head>";
		echo "<script>{alert('SU SESION YA EXPIRO! POR FAVOR VUELVA A LOGUEARSE.');";
		echo "top.location='index.php';}</script>";
	}
?>
