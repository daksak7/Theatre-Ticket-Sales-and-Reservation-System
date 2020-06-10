<?php
 ob_start();
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: index.php");
 }


 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'root');
 define('DBPASS', '');
 define('DBNAME', 'theatre');
 
 $conn = mysqli_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysqli_select_db($conn,DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysqli_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysqli_error());
 }


 $error = false;

 if ( isset($_POST['btn-signup']) ) {
  
  $kadi = trim($_POST['kadi']);
  $kadi = strip_tags($kadi);
  $kadi = htmlspecialchars($kadi);
  
  $sifre = trim($_POST['sifre']);
  $sifre = strip_tags($sifre);
  $sifre = htmlspecialchars($sifre);
  
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $ad = trim($_POST['ad']);
  $ad = strip_tags($ad);
  $ad = htmlspecialchars($ad);

  $telefon = trim($_POST['telefon']);
  $telefon = strip_tags($telefon);
  $telefon = htmlspecialchars($telefon);
  
    if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Lütfen geçerli bir mail adresi giriniz.";
       echo "Lütfen geçerli bir mail adresi giriniz.";
    //   sleep(2);
       header('Location: redirect-error.php');
  } else {
   $query = "SELECT email FROM member WHERE email='$email'";
   $result = mysqli_query($conn,$query);
   $count = mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Bu mail adresi zaten kullanılmakta.";
    echo  "Bu mail adresi zaten kullanılmakta.";
      //  sleep(3);
       header('Location: redirect-error.php');
   }
  }
   $query = "SELECT customer_username FROM member WHERE customer_username='$kadi'";
   $result = mysqli_query($conn,$query);
   $count = mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Bu kullanıcı adı zaten kullanılmakta.";
    echo  "Bu kullanıcı adı zaten kullanılmakta.";
      //  sleep(3);
       header('Location: redirect-error.php');
   }
      $query = "SELECT customer_username FROM member WHERE customer_username='$kadi'";
   $result = mysqli_query($conn,$query);
   $count = mysqli_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Bu kullanıcı adı zaten kullanılmakta.";
    echo  "Bu kullanıcı adı zaten kullanılmakta.";
      //  sleep(3);
       header('Location: redirect-error.php');
   }
  

  if( !$error ) {
   
   $query = "INSERT INTO member(c_name,phone,email,customer_username,customer_password) VALUES('$ad','$telefon','$email','$kadi','$sifre')";
   $res = mysqli_query($conn,$query);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Başarıyla kaydoldunuz.Giriş yapabilirsiniz.";
           header('Location: redirect.php');
  
    unset($username);
    unset($password);
    unset($email);
   } else {
    $errTyp = "danger";
    $errMSG = "Birşeyler ters gitti,daha sonra tekrar deneyin...";
    echo  "Birşeyler ters gitti,daha sonra tekrar deneyin...";
       //    sleep(3);
       header('Location: redirect-error.php');
   } 
    
  }
  
  
 }
?>