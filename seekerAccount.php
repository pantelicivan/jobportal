<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/homepage/favicon.ico" type="image/x-icon">
    <title>Online poslovi portal</title>
    <link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
    <link rel="shortcut icon" href="img/job.png">
    <style>
    .tiltContain {
        margin-top: 0%;
    }

    .btnTilt {
        height: 75px;
        background: rgba(225, 225, 225, 0.2);
        color: white;
        font-family: Comfortaa;
    }

    .textDarkShadow {
        text-shadow: 0px 0px 3px #000, 3px 3px 5px #003333;
    }
    </style>

<body onload="logoBeat()" style="font-family: 'Kodchasan', sans-serif;">

    <?php
include 'navBar.php';
include 'signinEmployerModals.php';
?>
    <div class="container-fluid" style="background-image:url('img/Wonderful-Blur-Wallpaper.jpg')">
        <?php
include 'connect.php';
 $sid = $_SESSION["sid"];
$sqlE = "select * from seeker where id = '$sid' ;";
     
     
     
$resultE = $conn->query($sqlE);
if ($resultE->num_rows > 0) {
     if($rowE = $resultE->fetch_assoc()) { 
        $name=  $rowE["name"];
          $email =  $rowE["email"];
          $qlf =  $rowE["qualification"];
          $skills =  $rowE["skills"];
}}
     
?>
        <div class="hero">
            <div style="width: 100%; " class="row">
                <div class="col-md-6">
                    <img src="img/myUser.jpg" class="img-circle img-responsive" width="200"
                        style="margin: 20%; box-shadow: 0px 0px 20px #1e1e1e;">
                </div>
                <div style=" height: 100vh; color: black " class="col-md-6">
                    <h2 style="margin-top:100px;">Username</h2>
                    <h4><?php echo $name; ?></h4><br><br>
                    <h2>Email</h2>
                    <h4><?php echo $email; ?></h4><br><br>
                    <h2>Kvalifikacije</h2>
                    <h4><?php echo $qlf; ?></h4><br><br>
                    <h2>Vestine</h2>
                    <h4><?php echo $skills; ?></h4><br><br>
                </div>
            </div>
        </div>

    </div>
 
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/signinModal.js"></script>
    <?php include 'footer.php';?>
</body>
</html>