<?php
include 'connect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    
  if(!isset($_POST['email']) || !isset($_POST['password'])){
     $output = json_encode(array('type' => 'error', 'text' => 'Unesite vase kredencijale!'));
     die($output);
    }
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{ //email validacija
    $output = json_encode(array('type' => 'error', 'text' => 'Unesite validnu email adresu!'));
    die($output);
}
																																		 
if($conn->connect_error){
        $output = json_encode(array('type' => 'error', 'text' => 'Greska pri povezivanju sa bazom'.$conn->connect_error));
    die($output);
    }
    
    
    $sqlE = "select * from employer where email = '$email' and password = '$password';";
    $sqlS = "select * from seeker where email = '$email' and password = '$password';";
     
     
     
$resultE = $conn->query($sqlE);
if ($resultE->num_rows > 0) {
     if($rowE = $resultE->fetch_assoc()) { 
    session_start();
    $_SESSION["eid"]= $rowE["id"];
    $_SESSION["login_employer"]= $rowE["name"];
    $output = json_encode(array('type' => 'success', 'text' => 'Uspesno logovanje'.$_SESSION["login_employer"]));
    die($output);

}}

    $resultS = $conn->query($sqlS);
    
if ($resultS->num_rows > 0) {
     if($rowS = $resultS->fetch_assoc()) { 
    session_start();
    $_SESSION["sid"]= $rowS["id"];
    $_SESSION["login_user"]= $rowS["name"];
    $output = json_encode(array('type' => 'success', 'text' => 'Uspesno logovanje'.$_SESSION["login_user"]));
    die($output);
}}else{
    $output = json_encode(array('type' => 'error', 'text' => 'Ne postoji korisnik sa unetim kredencijalima!'));
    die($output);
}

    }
    