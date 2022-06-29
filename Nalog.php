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
#mojDiv{
         display: none;
}
#prikazi{
    width: 100%;
    margin-left: 0%;
    padding: 10px;
    margin-top: 10px;
    margin-bottom: 30px;
    border: none;
    cursor: pointer;
    text-align: center;
    font-size: 18px;
    letter-spacing: .5px;
    transition: .2s ease background;
    box-shadow: inset 0 0 0 3px #fec107;
    color: #fff;
    background-color: transparent;
    text-decoration: none;
}
#prikazi:hover{
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
        <a href="Nalog.php">NALOG</a>
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
    <input type="text" name="imeUP" placeholder="Ime">
  </div>
    
    <div class="textbox">
    <input type="text" name="prezimeUP" placeholder="Prezime">
  </div>
    
  <div class="textbox">
    <input type="text" name="usernameUP" placeholder="Korisnicko ime">
  </div>
    
    <div class="textbox">
    <input type="email" name="emailUP" value="<?php echo $_SESSION['email'] ?>" placeholder="example@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" readonly>
  </div>

  <div class="textbox">
    <input type="password" name="passwordUP" placeholder="Lozinka">
  </div><br>
    

    <button type="submit" id="potvrdi" name="edit_user">Potvrdi</button>
    </div>
          
        </form> 
    <button id="prikazi" onclick="Pokazivanje()">Promeni informacije</button>
    <a href="Nalog.php?logout='1'">Odjavite se</a>
    
    </div>
      <!------Footer------->
        <div class="footer">
            <p style="margin-left:25%;" class="ii"><i class="fas fa-graduation-cap"></i> Projekat napravio: Nemanja Vilić &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-university"></i> Univerzitet: Metropolitan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-child"></i> Godina: prva &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-microchip"></i> Predmet: IT102</p>
        </div>
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
