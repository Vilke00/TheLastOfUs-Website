<?php
session_start();

$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'thelastofus');

if (isset($_POST['reg_user'])) {
  $vrsta = "KO";
  $ime = mysqli_real_escape_string($db, $_POST['ime']);
  $prezime = mysqli_real_escape_string($db, $_POST['prezime']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  
  $user_check_query = "SELECT * FROM korisnici WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Kornisnicko ime je zauzeto!");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email adresa je zauzeta");
    }
  }

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "INSERT INTO korisnici (ime, prezime, username, email, password, vrsta) 
  			  VALUES('$ime','$prezime','$username', '$email', '$password', '$vrsta')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
    $_SESSION['ime'] = $ime;
    $_SESSION['prezime'] = $prezime;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
  	$_SESSION['success'] = "Uspesno!";
    $_SESSION['vrsta'] = $vrsta;
  	header('location: Nalog.php');
  }
}


if (isset($_POST['reg_admin'])) {
  $vrsta = "AD";
  $imeAD = mysqli_real_escape_string($db, $_POST['imeAD']);
  $prezimeAD = mysqli_real_escape_string($db, $_POST['prezimeAD']);
  $usernameAD = mysqli_real_escape_string($db, $_POST['usernameAD']);
  $emailAD = mysqli_real_escape_string($db, $_POST['emailAD']);
  $passwordAD = mysqli_real_escape_string($db, $_POST['passwordAD']);

  $user_check_query = "SELECT * FROM korisnici WHERE username='$usernameAD' OR email='$emailAD' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { 
    if ($user['username'] === $usernameAD) {
      array_push($errors, "Kornisnicko ime je zauzeto!");
    }

    if ($user['email'] === $emailAD) {
      array_push($errors, "Email adresa je zauzeta");
    }
  }


  if (count($errors) == 0) {
  	$passwordAD = $passwordAD;

  	$query = "INSERT INTO korisnici (ime, prezime, username, email, password, vrsta) 
  			  VALUES('$imeAD','$prezimeAD','$usernameAD', '$emailAD', '$passwordAD', '$vrsta')";
      
  	mysqli_query($db, $query);
      $_SESSION['vrsta'] = $vrsta;
  	header('location: admin.php');
  }
}


if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
    
  $korisnikKveri = "SELECT * FROM korisnici WHERE username='$username' AND password='$password', vrsta='KO'";
  $adminKveri = "SELECT * FROM korisnici WHERE username='$username' AND password='$password', vrsta='AD'";

  if (empty($username)) {
  	array_push($errors, "Kornisnicko ime je obavezno!");
  }
  if (empty($password)) {
  	array_push($errors, "Lozinka je zahtevana!");
  }

  if (count($errors) == 0) {
  	$password = $password;
  	$query = "SELECT * FROM korisnici WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
        
        $data= mysqli_fetch_array($results);
        
        $_SESSION["ime"]=$data['ime']; 
        $_SESSION["prezime"]=$data['prezime'];
        $_SESSION["email"]=$data['email'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['vrsta'] = $data['vrsta'];
        
        if($data['vrsta'] == "KO"){ 
            $_SESSION['vrsta'] = "KO";
            header('location: Nalog.php'); 
        }
  	    else if($data['vrsta'] == "AD"){ 
            $_SESSION['vrsta'] = "AD";
            header('location: admin.php'); 
        }
        
  	}else {
  		array_push($errors, "Greska");
  	}
  }
}

if (isset($_POST['edit_user'])){
    
    $imeUP = mysqli_real_escape_string($db, $_POST['imeUP']);
    $prezimeUP = mysqli_real_escape_string($db, $_POST['prezimeUP']);
    $usernameUP = mysqli_real_escape_string($db, $_POST['usernameUP']);
    $emailUP = mysqli_real_escape_string($db, $_POST['emailUP']);
    $passwordUP = mysqli_real_escape_string($db, $_POST['passwordUP']);
    
    $user_check_query = "SELECT * FROM korisnici WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) {
        if ($user['username'] === $username) {
        array_push($errors, "Username already exists");
        }

        if ($user['email'] === $email) {
        array_push($errors, "email already exists");
        }
    }
    if (count($errors) == 0) {
    
        $kveri = "UPDATE korisnici SET ime='$imeUP', prezime='$prezimeUP', username='$usernameUP', password='$passwordUP' WHERE email='$emailUP'";

        mysqli_query($db, $kveri);
        $_SESSION['username'] = $usernameUP;
        $_SESSION['ime'] = $imeUP;
        $_SESSION['prezime'] = $prezimeUP;
        $_SESSION['email'] = $emailUP;
        $_SESSION['password'] = $passwordUP;
        $_SESSION['success'] = "Uspesno!";
        header('location: Nalog.php');
    }
}


if (isset($_POST['send_msg'])) {
    
  $imePI = mysqli_real_escape_string($db, $_POST['firstname']);
  $prezimePI = mysqli_real_escape_string($db, $_POST['lastname']);
  $brojPI = mysqli_real_escape_string($db, $_POST['phonenumber']);
  $naslovPI = mysqli_real_escape_string($db, $_POST['messsigetitle']);
  $subjectPI = mysqli_real_escape_string($db, $_POST['subject']);
    echo '$imePI','$prezimePI','$brojPI', '$naslovPI', '$subjectPI';

  $queryPI = "INSERT INTO pitanja (ime, prezime, broj, naslov, tekst) 
  			  VALUES('$imePI','$prezimePI','$brojPI', '$naslovPI', '$subjectPI')";
      
  	mysqli_query($db, $queryPI);
  	header('location: Kontakt.php');
}   

if (isset($_POST['order'])) {
    
    $imeNA = $_SESSION['ime'];
    $prezimeNA = $_SESSION['prezime'];
    $emailNA = $_SESSION['email'];
    $selectOption = $_POST['edition'];
    $adresa = $_POST['adresa'];
    $broj = $_POST['broj'];

    $queryNA = "INSERT INTO narudzbine (ime, prezime, email, edition, adresa, broj) 
  			  VALUES('$imeNA','$prezimeNA','$emailNA', '$selectOption', '$adresa','$broj')";
  	mysqli_query($db, $queryNA);
  	header('location: Naruci.php');
}

if(isset($_POST['reg_ocena'])){
    $email = $_POST['emailOcena'];
    $ocena = $_POST['ocena'];
    
    $queryOcena = "INSERT INTO rating (email, ocena) VALUES ('$email','$ocena')";
    mysqli_query($db,$queryOcena);
}

?>
