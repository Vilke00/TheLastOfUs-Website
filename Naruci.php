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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                        <style>
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
      </style>
   <script type="text/javascript" src="Javascript/prikaziForme.js"></script>
    </head>
    <body>
        <img id="ocenaIk" src="./Slike/zvezdice.png" width="100px;" height="100px;" style="z-index:999;" onclick="openRating()">
    <div id="ocenaBox" style="z-index:999;">
        <form return="false" method="post">

            <p style="text-align: center;"><i class="fas fa-newspaper" style="color: white; font-size: 400%;"></i></p>
            <p style="margin: 0; text-align: center; color: white; font-size: 150%;" >Ocenite igricu</p><br>
            <input type="email" name="emailOcena" placeholder="example@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" style="padding: 5 10 5 10; width: 90%; margin-left: 5%;"><br><br>
            <input type="number" name="ocena" placeholder="rating" style="padding: 5 10 5 10; width: 90%; margin-left: 5%;" min="1" max="10"><br>
            <button type="submit" name="reg_ocena">Oceni</button>

        </form>
    </div>
    <nav class="navigation">
        <div id="navbar" class="navbar-right">
            <a href="index.php">POCETNA</a>
            <a href="Kontakt.php">KONTAKT</a>
            <a href="Nalog.php">NALOG</a>
        </div>
        <p id="user_cont" style="color: #7c7e78; margin-left: 1%; margin-top: -8; margin-bottom: 0; width: auto; background: transparent; font-family: 'Rajdhani', sans-serif; font-size: 140%; border-right: none;">
            <?php
                    if(isset($_SESSION['username'])){
                        echo "<a href='checker.php' style=' color:white; text-decoration: none;'>".$_SESSION['username']."</a>";
                        echo " <a href='Logout.php' style='color: #fec107; text-decoration: none;'>Odjavite se</a>";
                    }
                    else echo " <a href='Login.php' style='color: white; text-decoration: none;'>Prijavite se</a>";
                    
                ?>
        </p>
    </nav> 
        
        <div id="naruc">
            <p id="molba">Molimo vas, popunite obrazac da biste narucili</p>
            <form action="Naruci.php" method="post" return="false">
                
                <select name="edition">
                    <option value="Limited Edition">Limited Edition</option>
                    <option value="Post Pandemic Edition">Post Pandemic Edition</option>
                    <option value="Survival Edition">Survival Edition</option>
                    <option value="Ellie Edition">Ellie Edition</option>
                    <option value="Joel Edition">Joel Edition</option>
                </select>
                <div class="red">
                <p style="color: white; font-size: 22; margin-top:3%; margin-left:23.9%; display: inline-block;">Unesite adresu dostave:</p>
                <input type="text" name="adresa" style="width: 25.1%; padding: .5%; margin-left:1%;">
                    </div>
                <div class="red">
                <p style="color: white; font-size: 22; margin-top:3%; margin-left:25.5%; display: inline-block;">Unesite broj telefona:</p>
                <input type="text" name="broj" style="width: 25.1%; padding: .5%; margin-left:1%;"><br><br>
                    </div>
                <button id="slanje" type="submit" name="order" >Posalji</button>
            </form>
        </div>
        
              <!------Footer------->
        <div class="footer">
            <p style="margin-left:25%;" class="ii"><i class="fas fa-graduation-cap"></i> Projekat napravio: Nemanja Vilić &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-university"></i> Univerzitet: Metropolitan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-child"></i> Godina: prva &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-microchip"></i> Predmet: IT101</p>
        </div>
        
    </body>
</html>