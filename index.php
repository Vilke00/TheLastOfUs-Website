<?php include('server.php'); ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Stil/Stil.css">
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        
         
        <script type="text/javascript" src="JavaScript/jquery-1.10.2.min.js"></script>
        
        <script src="https://kit.fontawesome.com/a6f8fc4900.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <!-----Header------>
        <header>
            <div class="header">
                <nav class="navigation">
            <div id="navbar" class="navbar-right">
        <a href="#ukratko">UKRATKO</a>
        <a href="#galerija">GALERIJA</a>
        <a href="#news">NOVOSTI</a>
        <a href="#kupi">NARUCI</a>
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
        <!----Video----->
         <div class="video-box">
        <video autoplay loop muted id="video">
                <source src="Video/TheLastOfUsMute6.mp4" type="video/mp4">
             </video>
             <div id="video_banner" class="video_banner">
                <p id="heading">AVAILABLE NOW</p>
                <button id="dugmeNaruci" onclick="window.location.href='#kupi';">NARUCI</button>
                <a href="#videostory" class="button more" id="videolink" >TRAILER</a>
                <div id="videostory" class="mfp-hide" style="max-width:75%; margin:0 auto;">
                 
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/W01L70IGBgE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                 
                 </div>
        </div>
                </div>
            </div>
        </header>
        
        <!----O igrici------>
        <div class="opis" id="ukratko">
            <h2>The last of us</h2>
            <p>
Smeštena u postapokaliptičnim Sjedinjenim Državama, igra govori o preživelima Joela i Ellie-a dok zajedno rade kako bi preživeli svoje putovanje na zapad preko ostataka zemlje kako bi pronašli mogući lek za modernu gljivičnu kugu koja je skoro desetkovala celu ljudsku rasu.</p>

<p>Igra počinje predstavljanjem Joela, samohranog oca sa svojom 12-godišnjom ćerkom Sarom. U noći na njegov rođendan, iznenadna epidemija veoma teške infekcije mozga koja potiče od nepoznate gljivice brzo se širi. Dok se Joel i Sara susreću sa njegovim bratom Tommiem, oni pokušavaju da napuste to područje. Joel i Sarah nakratko su razdvojeni od Tommija, jer ovaj potonji drži zaražene u zalivu. Joel i Sarah nastavljaju bježati, a nailaze na usamljenog vojnika kojem je naređeno da otvori vatru na njih. On to radi, a Joel i Sarah padaju niz brdo, razdvojeni jedno od drugog za samo nekoliko stopa. Kada vojnik uskoro pogubi Joela, Tommi ga upuca u glavu. Joel preživljava napad s lakšim povredama, ali Sarah je smrtno ranjena i umire u Joelovim rukama.</p>
        </div>
        
        <!-----Verzija----->
        <div id="kupi">
            <div class="edition">
                <div id="slika">
                    <img src="Slike/LimitedMalo.png"></div>
            </div>
            <h2>Edition</h2>
            <ul>
                <li dir="Slike/LimitedMalo.png"><a>Limited Edition</a></li>
                <li dir="Slike/Post-Pandemic_Edition-removebg.png"><a>Post Pandemic Edition</a></li>
                <li dir="Slike/SurvivalMali.jpg"><a>Survival Edition</a></li>
                <li dir="Slike/EllieManja.png"><a>Ellie edition</a></li>
                <li dir="Slike/JoelMali.jpg"><a>Joel edition</a></li>
            </ul>
            <button style="margin-left:76%; margin-top:1%;" id="dugmeNaruci" onclick="window.location.href='Naruci.php';">NARUCI</button>
        </div>
        
        <!------Galerija----->
        <div id="galerija">
            <h2 style="margin-left:3%; margin-bottom:4%;">Screenshots</h2>
            <div class="red">
                <img class="veca" src="Slike/Galerija/1.jpg">
                <img class="manja" src="Slike/Galerija/2.jpg">
                <img class="manja" src="Slike/Galerija/3.png">
            </div>

                <div id="myDIV">
            <div class="red">
                <img class="veca" src="Slike/Galerija/4.jpg">
                <img class="manja" src="Slike/Galerija/5.jpg">
                <img class="manja" src="Slike/Galerija/6.png">
            </div>
            <div class="red">
                <img class="veca" src="Slike/Galerija/7.png">
                <img class="manja" src="Slike/Galerija/8.jpg">
                <img class="manja" src="Slike/Galerija/9.png">
            </div>
            <div class="red">
                <img class="veca" src="Slike/Galerija/10.png">
                <img class="manja" src="Slike/Galerija/11.png">
                <img class="manja" src="Slike/Galerija/12.jpg">
            </div>
        </div>
             <button id="prikazi" onclick="myFunction()">Prikazi vise</button>
                </div> 
        
        <!------News-------->
        <div id="news">
            <h2 style="margin-left:14%; margin-bottom:4%;">Novosti</h2>
            <div class="grid-container">
                <div class="img-hover-zoom--prvi">
                    <img style="margin-left:15%; padding-left:0;" id="zoom1" class="slikanovost" src="Slike/SlikaVest1.jpg">
                </div>
                <div class="img-hover-zoom--drugi">
                    <img  style="margin-left:-35%;"class="slikanovost" id="zoom2" src="Slike/SlikaVest2.jpg">
                </div>
                <div><h5 style="margin-left:12%;"><a href="https://www.naughtydog.com/blog/the_last_of_us_part_ii_ellie_edition_restock_new_key_art_and_more" target="_blank">The Last of Us Part II Ellie Edition Restock, New Key Art, and More</a></h5></div>
                <div><h5 style="margin-left:-58%;"><a href="https://www.naughtydog.com/blog/the_last_of_us_part_ii_gameplay_revealed" target="_blank">The Last of Us Part II Gameplay Revealed</a></h5></div>
                <div><p>February 11, 2020 <span class="razmak">|</span> Arne Meyer</p></div>
                <div><p style="margin-left:-77%;">June 11th, 2018 <span class="razmak">|</span> Neil Druckmann</p></div>
        </div>
                </div>
        
        <!------Footer------->
        <div class="footer">
            <p style="margin-left:25%;" class="ii"><i class="fas fa-graduation-cap"></i> Projekat napravio: Nemanja Vilić &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-university"></i> Univerzitet: Metropolitan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-child"></i> Godina: prva &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-microchip"></i> Predmet: IT102</p>
        </div>
        <script>
            $('#videolink').magnificPopup({
                type:'inline', 
                midclick: true
                
            })
        </script>
        
        <script>

$(document).ready(function(){
	
	
	$('li').click(function(){
		
		var imgpath = $(this).attr('dir');
		
		$('#slika').html('<img src='+imgpath+'>');
		
	});
	
	
	$('.btn').click(function(){
		
		$('#kupi').fadeIn(500);
		$('#slika').animate({marginTop:'10px'},200);
		$(this).hide();
		
		$('#hide').fadeIn('slow');
		
	});
	
	
	$('#hide').click(function(){
		
		$('#kupi').fadeOut(500,function (){
		$('#slika').animate({marginTop:'50px'},200);
		});
		
		$(this).hide();
		$('#show').fadeIn('slow');
		
	});
});
</script>
        <script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display !== 'block') {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
    
}
</script>
        
        <script>
            // When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction1()};

// Get the navbar
var navbar = document.getElementById("navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction1() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} 
        </script>
    </body>
</html>