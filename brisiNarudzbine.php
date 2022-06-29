<?php

$con = new PDO("mysql:host=localhost;dbname=thelastofus", "root","");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$idic = $_GET["id"];


$stmt = $con->prepare("DELETE FROM narudzbine WHERE ID =:id");
$stmt->bindParam(":id", $idic);
$stmt->execute();
header("Location: admin.php");
?> 