<?php
 include 'authorizeEmployer.php';
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/homepage/favicon.ico" type="image/x-icon">
    <title> Online poslovi portal</title>
    <link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link href="css/animate.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
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
?>
    <div class="container-fluid" style="background:url('img/Wonderful-Blur-Wallpaper.jpg');">
        <?php
include 'connect.php';

$sqlE = "select * from employer where id = '$eid' ;";
     
     
     
$resultE = $conn->query($sqlE);
if ($resultE->num_rows > 0) {
     if($rowE = $resultE->fetch_assoc()) { 
        $name=  $rowE["name"];
          $email =  $rowE["email"];
           $fileName = $rowE["logo"];
}}
     
?>

        <div class="hero">
            <div style="width: 100%; " class="row">
                <div class="col-md-4">
                    <img src="uploads/<?php echo $fileName;?>" class="img-circle img-responsive" width="200"
                        style="margin: 20%; box-shadow: 0px 0px 20px #1e1e1e;">
                    <h4>Korisnicko ime</h4>
                    <h2><?php echo $name; ?></h2>
                    <h4>Email</h4>
                    <h2><?php echo $email; ?></h2>
                </div>

                <div style=" height: 100vh; margin-top:5% " class="col-md-8">
                    <div>
                        <h3>Postavljeni poslovi:</h3>
                    </div>
                    <table class="table table-hover table-responsive table-striped" id='postTable'>
                        <thead>
                            <th>Id</th>
                            <th>Naslov</th>
                            <th>Opis</th>
                            <th>Min iskustvo</th>
                            <th>Zarada</th>
                            <th>Status</th>
                            <th>Azuriraj</th>
                            <th>Izbrisi</th>
                        </thead>
                        <tbody>

                            <?php 
                             $sql="select * from post where eid=$eid"; 
                                 $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                             while($row = $result->fetch_assoc()) 
                                 {
                                 $id=$row['id'];
                                $title=$row['name'];
                                $category=$row['category'];
                                $minexp=$row['minexp'];
                                $salary=$row['salary'];
                                $industry=$row['industry'];
                                $desc=$row['desc'];
                                $role=$row['role'];
                                $status=$row['status'];

                                ?>
                            <tr>
                                <td><?php echo $id;?></td>
                                <td><?php echo $title;?></td>
                                <td><?php echo $desc;?></td>
                                <td><?php echo $minexp;?></td>
                                <td><?php echo $salary;?></td>
                                <td><?php echo $status;?></td>
                                <td>
                                    <a href="postjob.php?update=true&id=<?php echo $id;?>"> <span
                                            class="glyphicon glyphicon-pencil"></span></a>
                                </td>
                                <td>
                                    <a href="deletePost.php?id=<?php echo $id;?>"> <span
                                            class="glyphicon glyphicon-trash"></span></a>
                                </td>
                            </tr>
                            <?php
                                 }}  
                              ?>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-warning test" data="generateJSON">Napravi JSON fajl</button>
                </div>
            </div>
        </div>
    </div>


    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/signinModal.js"></script>

    <?php include 'footer.php';?>
    <script>
    $(document).ready(function() {
        $('#postTable').DataTable();
    });

    $(".test").click(function() {
        var url = $(this).attr("data");
        $.ajax({
            url: "generateJSON.php"
            
        });
    });
    </script>
</body>

</html>