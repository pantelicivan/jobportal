<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online poslovi portal</title>
    <link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Animate.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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

    <div class="container-fluid"
        style=" background-image: url('img/mainBackg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="hero" style=" color:whitesmoke;">
            <h1 style="padding:50px; font-size: 100px;"><strong>POSLOVI PORTAL</strong></h1>
            <div style="width: 100%" class="row">

                <div class="col-md-9">

                    <div style=" margin-top: 30px;">
                        <h1>Pronadji poslove</h1>
                        <form class="example" action="index.php">
                            <input style="color:#000" type="text" placeholder="Search.." name="q">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>

                    <div class="container row">

                        <?php  $name=$category=$minexp=$salary=$industry=$desc=$role=$eType=$status=$msg="";

include 'connect.php';
    
    $sql = "select *,(select name from employer where id=post.eid)as ename from post  order by date";  
       
        if(isset($_GET['q'])){
          $sql = "select *,(select name from employer where id=post.eid)as ename from post where name LIKE '%".$_GET['q']."%' order by date";
        }
      if(isset($_GET['industry'])){
          $sql = "select *,(select name from employer where id=post.eid)as ename from post where industry='".$_GET['industry']."' order by date";
        }
      if(isset($_GET['category'])){
        $sql = "select *,(select name from employer where id=post.eid)as ename from post where category='".$_GET['category']."' order by date";
      }
     
      $result = $conn->query($sql);
      if($result->num_rows>0){
    while(  $row=$result->fetch_assoc()){
            $pid= $row['id'];
            $jobtitle= $row['name'];
            $category=$row['category'];
            $minexp=$row['minexp'];
            $salary=$row['salary'];
            $industry=$row['industry'];
            $desc=$row['desc'];
            $role=$row['role'];
           $ename =$row['ename'];
            $status=$row['status'];
    ?>

                        <div class="col-md-5"
                            style="margin: 20px; background: rgba(0,0,0,0.5);padding: 5px;box-shadow: 0px 0px 5px #003333">
                            <h3 style="color: #2196F3"><?php echo $jobtitle;?></h3>
                            <h5>Postavio: <?php echo $ename;?></h5><br>
                            <h4>Opis posla: <br>
                                <h5><?php echo $desc;?></h5>
                            </h4>
                            <h5>Potrebno iskustvo: <?php echo $minexp;?> godina </h5>
                            <h5>Zarada: <?php echo $salary;?> </h5>
                            <br>
                            <a href="applyJob.php?id=<?php echo $pid;?>" class="pull-right">
                                <h3>Konkurisi</h3>
                            </a>
                        </div>

                        <?php }}else{
                                    echo "Za uneti kriterijum nema podataka!";
                                } ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style='padding:30px'>
                        <h3>Poslovi po industriji</h3>
                        <form>
                            <select class="form-control" name='industry'>
                                <?php include "industryOptions.php";?>
                            </select><br>
                            <input class="btn btn-success pull-right" type="submit" value="Trazi" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/signinModal.js"></script>

    <?php include 'footer.php';?>

    <button style="display:none;" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#msgModal"
        id="msgModalBtn">Open Modal</button>

    <div id="msgModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <?php if(isset($_GET['msg'])){
          $msg= $_GET['msg'];
          if($msg=='success'){
            
       echo  "<h4 class='modal-title'>Uspesno ste konkurisali!</h4>";
          }else if($msg=='error'){
      echo  "<h4 class='modal-title'>Greska... Pokusajte ponovo kasnije!</h4>";
          }else if($msg=='dup'){
        echo "<h4 class='modal-title'>Vec ste konkurisali za ovaj posao.\n "
              . "Proverite status vase aplikacije u odeljku 'Konkurisani poslovi'</h4>";
          }
          
          
      }?>
                </div>

            </div>

        </div>
    </div>
    <?php 
if(isset($_GET['msg'])){
    if($_GET['msg']=='login'){
?>
    <script>
    $('#loginAnchor').trigger("click");
    </script>
    <?php }else{
      ?>
    <script>
    $('#msgModalBtn').trigger("click");
    </script>

    <?php  
    } 
    
    }?>
</body>

</html>