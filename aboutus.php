<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>O nama</title>
    <link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link href="css/modal.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
    <link rel="shortcut icon" href="img/job.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<body onload="logoBeat()" style="font-family: 'Kodchasan', sans-serif;">


    <?php
include 'navBar.php';
include 'signinEmployerModals.php';
?>

    <div class="container-fluid "
        style="background-image: url('img/mainBackg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="hero" style=" color:whitesmoke;">
            <h1 style="padding:50px; font-size: 100px;"><strong>O NAMA</strong></h1>

            <div class="col-md-6">
                <div class="card" style="background-image: url('img/bgbg.png');">
                    <img src="img/ivan.jpg" alt="John" style="width:100%">
                    <h1>Ivan Pantelic</h1>
                    <p class="title">Student</p>
                    <p>Fakultet organizacionih nauka</p>
                    <div style="margin: 24px 0;">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <p><button>Kontakt</button></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card" style="background-image: url('img/bgbg.png');">
                    <img src="img/myUser.jpg" alt="John" style="width:100%">
                    <h1>Mladen Milic</h1>
                    <p class="title">Student</p>
                    <p>Fakultet organizacionih nauka</p>
                    <div style="margin: 24px 0;">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </div>
                    <p><button>Kontakt</button></p>
                </div>
            </div>
        </div>
    </div>



    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/signinModal.js"></script>

    <?php include 'footer.php';?>

</body>

</html>