<?php
include 'authorizeEmployer.php';
if(isset($_GET['id'])){
    $aip = $_GET['id']; 
    include 'connect.php'; 
    $sql = "update jobsapplied set status='Odbijeno' where id='$aip';";
    $result=$conn->query($sql);
    header('location: ViewApplicants.php');
}else{     
    header('location: index.php?msg=dup');
}
    die();
?>