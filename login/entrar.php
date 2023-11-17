<?php 
session_start();
$_SESSION['apodo'] = $_GET['apodo'];
$u = $_GET['usuario'];
$c =$_GET['contrasena'];
$contador=0;

while ($u =="moises" AND $c =="123456") {
	$contador++;
	break;
}
if ($contador>0) {
	echo "<script>window.location='inicio.php'</script>";
	echo "Biemvenido";
}else{
	echo "<script>window.location='error.php'</script>";

}


 ?>