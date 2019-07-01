<?php
include 'connect.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $name = $_POST["name"];
     $email = $_POST["email"];
     $password = $_POST["password"];
     $qlf = $_POST["qlf"];
     $dob = $_POST["dob"];
     $skills = $_POST["skills"];
    
    $sql = "INSERT INTO seeker (name,email,password,qualification,dob,skills)
VALUES ('$name', '$email', '$password','$qlf', '$dob', '$skills')";

if ($conn->query($sql) === TRUE) {
    ?>

<html>

<head>
    <link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="shortcut icon" href="img/job.png">
</head>

<body style="background: url(img/bgbg.png);height: 100vh;">
    <div style="">
    </div>
    <button id="modalBtn" type="button" style="display:none" class="btn btn-info btn-lg" data-toggle="modal"
        data-target="#myModal">Open Modal</button>
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">

                    <h3>Uspesno ste se registrovali.. Ulogujte se da nastavite</h3>
                    <br>
                    <a href="index.php?msg=login">Prijavi se</a>
                </div>
            </div>
        </div>

        <script>
        $('#modalBtn').trigger("click");
        </script>
</body>
</html>
<?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}else{
      header("location : index.php");
}
