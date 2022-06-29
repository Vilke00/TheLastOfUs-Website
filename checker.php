<?php 
include('server.php'); 

if(isset($_SESSION['vrsta']) == "AD"){
    header('location: admin.php'); 
}

if(isset($_SESSION['vrsta']) == "KO"){
    header('location: Nalog.php'); 
}
else header('location: Login.php');

?>

