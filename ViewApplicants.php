<?php include 'authorizeEmployer.php';?>
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

$sql = "select * from employer where id = '$eid' ;";
     
     
     
$result = $conn->query($sql);
if ($result->num_rows > 0) {
     if($row = $result->fetch_assoc()) { 
        $name=  $row["name"];
          $email =  $row["email"];
          $fileName = $row["logo"];
           
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
                        <h3>Primljene aplikacije:</h3>
                    </div>
                    <table class="table table-hover table-responsive table-striped" id='jobappliedTable'>
                        <thead>
                            <th>Id</th>
                            <th>Kandidat</th>
                            <th>Datum konkurisanja</th>
                            <th>Naziv posla</th>
                            <th>Kandidat Vestine</th>
                            <th>Status</th>
                            <th>Prihvati</th>
                            <th>Odbaci</th>
                        </thead>
                        <tbody>

                            <?php 
                             $sql="select id,sid,pid,(select name from seeker where id=j.sid)as sname,date,"
                                     . "(select name from post where id=j.pid)as title,"
                                     . "(select skills from seeker where id=j.sid)as skills,"
                                     . "status"
                                     . " from jobsapplied j where pid in (select id from post where eid=$eid);"; 
                             
                             $appresult = $conn->query($sql);
                        if ($appresult->num_rows > 0) {
                             while($row = $appresult->fetch_assoc()) 
                                 {
                                 $id=$row['id'];
                                $pid=$row['pid'];
                                $sname = $row['sname'];
                                $title=$row['title'];
                                $date=$row['date'];
                                $skills=$row['skills'];
                                $status=$row['status'];
                                $resume=$row['resume'];

                                ?>
                            <tr>
                                <td><?php echo $pid;?></td>
                                <td><?php echo $sname;?></td>
                                <td><?php echo $date;?></td>
                                <td><?php echo $title;?></td>
                                <td><?php echo $skills;?></td>
                                <td><?php echo $status;?></td>
                                <td><a href="acceptApplication.php?id=<?php echo $id;?>"><span
                                            class="glyphicon glyphicon-ok"></span></a></td>
                                <td><a href="rejectApplication.php?id=<?php echo $id;?>"><span
                                            class="glyphicon glyphicon-ban-circle"></span></a></td>
                            </tr>
                            <?php
                                 }}  
                              ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/signinModal.js"></script>

    <?php include 'footer.php';?>
    <script>
    $(document).ready(function() {
        $('#jobappliedTable').DataTable();
    });
    </script>
</body>

</html>