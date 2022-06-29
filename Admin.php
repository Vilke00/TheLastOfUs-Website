<?php 
  include('server.php');

  if (!isset($_SESSION['username'])) {   
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="Stil/Stil.css">
        <script src="https://kit.fontawesome.com/a6f8fc4900.js" crossorigin="anonymous"></script>
      <script type="text/javascript" src="Javascript/prikaziForme.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <style>
                body{
                    background-color: black;
                    background-image: none;
                }
        .footer{
     position: absolute;
	bottom:0px;
    margin-bottom: 0;
	width:100%;
    background-color: black;
    color: #fff;
    font-weight: bold;
            padding-top: 10;
                }
#mojDiv{
         display: none;
}
                
#odjava:hover{
    background-color: #7e620e;
    color: black;
}
      </style>
  </head>
  <body>
      <nav class="navigation">
            <div id="navbar" class="navbar-right">
        <a href="index.php">POCETNA</a>
        <a href="Kontakt.php">KONTAKT</a>
        <a href="Admin.php">NALOG</a>
      </div>
            </nav>  
<div class="reg-box">
      <form return="false" method="post" action="Nalog.php">
    <h2 style="margin-left:0%; margin-bottom:5%;">
   <?php
                    echo "Pozzz druze, ". $_SESSION['ime'] ."!!!!"; 
                ?></h2>
    
    <div class="textbox">
    <input type="text" name="ime" value="<?php echo $_SESSION['ime'] ?>" placeholder="Ime" readonly>
  </div>
    
    <div class="textbox">
    <input type="text" name="prezime" value="<?php echo $_SESSION['prezime'] ?>" placeholder="Prezime" readonly>
  </div>
    
  <div class="textbox">
    <input type="text" name="username" value="<?php echo $_SESSION['username'] ?>" placeholder="Korisnicko ime" readonly> 
  </div>
    
    <div class="textbox">
    <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="E-mail" readonly>
  </div>

  <div class="textbox">
    <input type="password" name="password" value="<?php echo $_SESSION['password'] ?>" placeholder="Lozinka" readonly>
  </div><br>
    
    <div id="mojDiv">
    
    <div class="textbox">
    <input type="text" name="imeAD" placeholder="Ime">
  </div>
    
    <div class="textbox">
    <input type="text" name="prezimeAD" placeholder="Prezime">
  </div>
    
  <div class="textbox">
    <input type="text" name="usernameAD" placeholder="Korisnicko ime">
  </div>
    
    <div class="textbox">
    <input type="email" name="emailAD" placeholder="example@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
  </div>

  <div class="textbox">
    <input type="password" name="passwordAD" placeholder="Lozinka">
  </div><br>
    

    <button class="adminDugmici" type="submit" id="potvrdi" name="reg_admin">Potvrdi</button><br><br>
    </div>
          
        </form> 
    
            <a id="odjava" href="Nalog.php?logout='1'">Odjavite se</a><br><br>
    <button class="adminDugmici" id="prikazi" onclick="Pokazivanje()">Dodaj novog admina</button>
            <?php

                $con = new PDO("mysql:host=localhost;dbname=thelastofus", "root","");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql="SELECT ID,ime,prezime,username,email,vrsta FROM korisnici";
                $exc = $con->query($sql);
                $nbrow = 0;
                echo "<table style='color:white; margin-left:-100%; display:none;' border=1 id='korisniciTab'><th>ID</th><th>Ime</th><th>Prezime</th><th>Korisnicko ime</th><th>Email</th><th>Privilegija</th>";
                while($row = $exc->fetch()){
                    echo "<tr ><td>". $row["ID"] ."</td><td>" . $row["ime"] . "</td> <td>". $row["prezime"] ."</td><td>" . $row["username"] ."</td> <td>". $row["email"] ."</td><td>" . $row["vrsta"] . "</td><td><a style='border:none;' href='brisiKorisnika.php?id=" .$row["ID"] ."'>Obrisi</a></td>"; 
                    echo "</tr>";
                    $nbrow++;
                }
            ?>
            <button class="adminDugmici" id="dugmePokaziKO" type="button" onclick="pokaziKorisnike()" >Korisnici</button>
        
            <?php

                $con = new PDO("mysql:host=localhost;dbname=thelastofus", "root","");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql="SELECT ime,prezime,email,edition,adresa,broj FROM narudzbine";
                $exc = $con->query($sql);
                $nbrow = 0;
                echo "<table style='color:white; margin-left:-90%; margin-bottom:3%; display:none;' border=1 id='narudzbineTab'><th>Ime</th><th>Prezime</th><th>Email</th><th>Edition</th><th>Adresa</th><th>Broj telefona</th>";
                while($row = $exc->fetch()){
                    echo "<tr><td>" . $row["ime"] . "</td> <td>". $row["prezime"] ."</td><td>". $row["email"] ."</td><td>" . $row["edition"] . "</td><td>". $row['adresa'] ."</td><td>". $row['broj'] ."</td><td><a style='border:none;' href='brisiNarudzbine.php?id=" .$row["broj"] ."'>Obrisi</a></td>"; 
                    echo "</tr>";
                    $nbrow++;
                }
            ?>
            <button class="adminDugmici" id="dugmePokaziNA" type="button" onclick="pokaziNarudzbine()">Narudzbine</button>
        
        
            <?php

                $con = new PDO("mysql:host=localhost;dbname=thelastofus", "root","");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql="SELECT * FROM pitanja";
                $exc = $con->query($sql);
                $nbrow = 0;
                echo "<table style='color:white; margin-left:-75%; display:none;' border=1 id='pitanjaTab'><th>ID</th><th>Ime</th><th>Prezime</th><th>Email</th><th>Naslov</th><th>Dodatno</th>";
                while($row = $exc->fetch()){
                    echo "<tr><td>" . $row["ID"] . "</td> <td>". $row["ime"] ."</td><td>". $row["prezime"] ."</td><td>" . $row["broj"] . "</td><td>". $row['naslov'] ."</td><td>". $row['tekst'] ."</td><td><a style='border:none;' href='brisiPitanja.php?id=" .$row["ID"] ."'>Obrisi</a></td>"; 
                    echo "</tr>";
                    $nbrow++;
                }
            ?>
            <button class="adminDugmici"id="dugmePokaziPI" type="button" onclick="pokaziPitanja()">Pitanja</button>
        
            <?php

                $con = new PDO("mysql:host=localhost;dbname=thelastofus", "root","");
                $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql="SELECT * FROM stanje";
                $exc = $con->query($sql);
                $nbrow = 0;
                echo "<table style='color:white; margin-left:0%; display:none;' border=1 id='stanjeTab'><th>ID</th><th>Edition</th>";
                while($row = $exc->fetch()){
                    echo "<tr><td>" . $row["ID"] . "</td> <td>". $row["edition"] ."</td><td><a style='border:none;' href='detaljno.php?id=" .$row["ID"] ."'>Detaljnije</a></td>"; 
                    echo "</tr>";
                    $nbrow++;
                }
            ?>
            <button class="adminDugmici" id="dugmePokaziST" type="button" onclick="pokaziStanje()">Stanje vozila</button>
    
      </div>
      
      <!------Footer------->
              <script>
function Pokazivanje() {
  var x = document.getElementById("mojDiv");
  if (x.style.display !== 'block') {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>
  </body>
</html>
