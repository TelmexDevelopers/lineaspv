<?
session_start();	
//echo $_SESSION["autentificado"];
//$_SESSION["autentificado"] = "NO";
session_destroy() or die("Error");  
echo "<script>top.location='index.php';</script>";
?>
