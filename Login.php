<?php include('server.php'); ?>
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
  </head>
  <body>
         <nav class="navigation">
            <div id="navbar" class="navbar-right">
        <a href="index.php">POCETNA</a>
        <a href="Kontakt.php">KONTAKT</a>
        <a href="Nalog.php">NALOG</a>
      </div>
            </nav>
<form return="false" method="post" action="Login.php">
<div class="login-box">
  <h1>Login</h1>
  <div class="textbox">
    <input type="text" name="username" placeholder="Username">
  </div>

  <div class="textbox">
    <input type="password" name="password" placeholder="Password">
  </div>

  <input type="submit" class="btn" name="login_user" value="Sign in">
  <a href="Register.php">Register</a>
</div>
      </form>
      <!------Footer------->
        <div class="footer">
            <p style="margin-left:25%;" class="ii"><i class="fas fa-graduation-cap"></i> Projekat napravio: Nemanja Vilić &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-university"></i> Univerzitet: Metropolitan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-child"></i> Godina: prva &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-microchip"></i> Predmet: IT102</p>
        </div>
  </body>
</html>
