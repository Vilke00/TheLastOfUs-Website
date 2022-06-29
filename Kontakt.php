<?php include('server.php'); ?>
<html>
    <head>
       <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Stil/Stil.css">
        <link rel="stylesheet" href="Stil/CSSkontakt.css">
        <script type="text/javascript" src="Javascript/js.js"></script>
        <script type="text/javascript" src="Javascript/prikaziForme.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a6f8fc4900.js" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:black;">
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
        <!-----NavBar------>
<header>
            <div class="header">
                <nav class="navigation">
            <div id="navbar" class="navbar-right">
        <a href="index.php">NAZAD NA POCETNU</a>
        <a href="Nalog.php">NALOG</a>
      </div>
            </nav>
    </div>
             <p id="user_cont" style="color: #7c7e78; margin-left: 1%; margin-top: 10; margin-bottom: 0; width: auto; background: transparent; font-family: 'Rajdhani', sans-serif; font-size: 140%; border-right: none;">
            <?php
                    if(isset($_SESSION['username'])){
                        echo "<a href='checker.php' style=' color:white; text-decoration: none;'>".$_SESSION['username']."</a>";
                        echo " <a href='Logout.php' style='color: #fec107; text-decoration: none;'>Odjavite se</a>";
                    }
                    else echo " <a href='Login.php' style='color: white; text-decoration: none;'>Prijavite se</a>";
                    
                ?>

        </p>
        </header>
        <!--------KontaktForma--------->
        
        <div class="container" id="forma">
  <div style="text-align:center">
    <h2 style="margin-left:23%; margin-top:-5%;">Konaktirajte nas</h2>
  </div>
  <div class="row">
    <div class="column">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11318.234378212157!2d20.4551465!3d44.8305564!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd2bdfbf9d4b80259!2sUniverzitet%20Metropolitan!5e0!3m2!1ssr!2srs!4v1576759941942!5m2!1ssr!2srs"frameborder="0" style="border:0;" allowfullscreen=""></iframe>
               <div class="column">
                   Kontakt telefon:<br>
                   <i class="fas fa-phone-alt"></i> +381 64/8222/969
               </div>
               <div class="column">
                    E-mail:<br>
                   <i class="fas fa-envelope"></i> nemanja.vilic@gmail.com
               </div>
    </div>
    <div class="column">
      <form name="myForm" method="post" onsubmit = "return(validate());">
        <label for="fname">Ime</label>
        <input type="text" id="fname" name="firstname" placeholder="Vase ime..">
        <label for="lname">Prezime</label>
        <input type="text" id="lname" name="lastname" placeholder="Vase prezime..">
        <label for="mtitle">Naslov poruke</label>
        <input type="text" id="mtitle" name="messsigetitle" placeholder="Naslov poruke..">
        <label for="pnumber">Broj telefona</label>
        <input type="text" id="pnumber" name="phonenumber" placeholder="eg.+381 61 1111111.." maxlength="15" pattern="[0-9-+ /]*" value="" title="Molimo pisite u zadatom formatu!"/>
        <label for="subject">Tekst poruke</label>
        <textarea id="subject" name="subject" placeholder="Pisanje.." style="height:160px" maxlength="300"></textarea>
          <input type="submit" name="send_msg" value="Submit" style="margin-top: 15px;">
      </form>
    </div>
  </div>
</div>
        <!-------Footer------->
<div  style="background-color:#1b1b1b;"class="navbar fixed-bottom">
    <div class="container text-center navbar-fixed-bottom">
        <p class="ii"><i class="fas fa-graduation-cap"></i> Projekat napravio: Nemanja Vilić &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-university"></i> Univerzitet: Metropolitan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-child"></i> Godina: prva &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-microchip"></i> Predmet: IT102</p>
    </div>
</div><br><br><br>
</body>
</html>