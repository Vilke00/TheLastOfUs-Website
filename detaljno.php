<?php

$con = new PDO("mysql:host=localhost;dbname=thelastofus", "root","");
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $idic = $_GET["id"];

$stmt = $con->prepare("SELECT * FROM stanje WHERE ID =:id");
$stmt->bindParam(":id", $idic);
$stmt->execute();
$nbrow = 0;

echo '<link rel="stylesheet" href="../Stil/Stil.css">';

echo "<body style='background-color:#1b1b1b;'><table border=1 style='color:white; margin-top:3%; margin-left:40%; width: 20%; height: 10%;
    text-align: center;' id='stanjeDet'><th>ID</th><th>Edition</th><th>Stanje</th></body>";

while($row = $stmt->fetch()){
    echo "<tr> <td>" . $row["ID"] . "</td> <td>". $row["edition"] . "</td> <td>" . $row["stanje"] . "</td></tr>";
    $nbrow++;
}
echo "<br/><a id=stanjeA style='margin-left:47%;margin-top:10%; margin-bottom:5%; color:white; font-size:22px; text-decoration:none;' href=Admin.php> Nazad </a>";
?>