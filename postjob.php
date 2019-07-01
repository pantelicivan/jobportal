<?php
include 'authorizeEmployer.php';
$id=0;
$name=$category=$minexp=$salary=$industry=$desc=$role=$eType=$status=$msg="";

if ($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'GET') {
include 'connect.php';
    if(isset($_GET['update'])&& isset($_GET['id'])){
      $id = $_GET['id'];
        $res = $conn->query($sql);
      $sql="select * from post where eid=$eid and id=$id"; 
      $result = $conn->query($sql);
    if(  $row=$result->fetch_assoc()){
            $name= $row['name'];
            $category=$row['category'];
            $minexp=$row['minexp'];
            $salary=$row['salary'];
            $industry=$row['industry'];
            $desc=$row['desc'];
            $role=$row['role'];
            $eType=$row['eType'];
            $status=$row['status'];
    }
    }
    
if(isset($_POST['submitPost'])){	
    
            $id= $_POST['id'];
            $name= $_POST['name'];
            $category=$_POST['category'];
            $minexp=$_POST['minexp'];
            $salary=$_POST['salary'];
            $industry=$_POST['industry'];
            $desc=$_POST['desc'];
            $role=$_POST['role'];
            $eType=$_POST['eType'];
            $status=$_POST['status'];    
    
    if($id>0){
        $sql = "Update `post` set `date`=CURRENT_DATE(),"
                . "`name`='$name', "
                . "`category`='$category', "
                . "`minexp`='$minexp', "
                . "`desc`='$desc', "
                . "`salary`='$salary', "
                . "`industry`='$industry', "
                . "`role`='$role', "
                . "`employmentType`='$eType', "
                . "`status`= '$status' "
                . "where id=$id and eid=$eid;";        
    }else{       
    $sql = "INSERT INTO `post` (`id`, `date`, `eid`, `name`, `category`, `minexp`, `desc`, `salary`, `industry`, `role`, `employmentType`, `status`) "
            . "VALUES (NULL, CURRENT_DATE(), '$eid', '$name', '$category', '$minexp', '$desc', '$salary', '$industry', '$role', '$eType', '$status');";
    }
    
    if ($conn->query($sql) === TRUE) {
        if($_GET['update']){
           header('location: employerAccount.php');
        }else{
        $msg="Uspesno postavljen posao!";
        }
    } else {
        $msg="Greska: " . $sql . "<br>" . $conn->error;
    }
}

    }
?>


<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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


<body onload="logoBeat()" style="font-family: 'Kodchasan', sans-serif;">

    <?php
include 'navBar.php';

?>
    <div class="container-fluid" style="background-color:#3bb3e0;">
        <?php
include 'connect.php';
 $eid = $_SESSION["eid"];
$sqlE = "select * from employer where id = '$eid' ;";
     
     
     
$resultE = $conn->query($sqlE);
if ($resultE->num_rows > 0) {
     if($rowE = $resultE->fetch_assoc()) { 
        $ename=  $rowE["name"];
          $email =  $rowE["email"];
           
}}
     
?>

        <div class="hero">
            <div class="container contact-form"
                style=" background-image: url('img/bgbg.png'); box-shadow: 0px 0px 25px #1e1e1e;">
                <div class="contact-image">
                    <img src="img/rocket_contact.png"
                        style=" background-image: url('img/bgbg.png'); box-shadow: 0px 0px 25px #1e1e1e;"
                        alt="rocket_contact" />
                </div>
                <form method="post">
                    <h3>Postavi posao</h3>
                    <div class="row">
                        <div><?php echo $msg;?></div>
                        <input type='hidden' value="<?php echo $id;?>" name='id' />
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Naziv posla:</label>

                                <input type="text" name="name" class="form-control" placeholder="Naziv posla"
                                    value="<?php echo $name;?>" />
                            </div>
                            <div class="form-group">
                                <label for="category">Kategorija posla</label>
                                <select type="text" name="category" class="form-control" placeholder="Kategorija">
                                    <?php include 'categoryOptions.php';?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="minexp">Min iskustvo</label>
                                <input type="text" name="minexp" class="form-control" placeholder="Min iskustvo"
                                    value="<?php echo $minexp;?>" />
                            </div>
                            <div class="form-group">
                                <label for="salary">Zarada</label>
                                <input type="text" name="salary" class="form-control" placeholder="Zarada"
                                    value="<?php echo $salary;?>" />
                            </div>
                            <div class="form-group">
                                <label for="industry">Industrija</label>
                                <select type="text" name="industry" class="form-control" placeholder="Industrija">
                                    <?php include 'industryOptions.php';?>
                                </select>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="desc">Zahtevi</label>
                                <textarea name="desc" class="form-control" placeholder="Opis"
                                    style="width: 100%; height: 120px;"><?php echo $desc;?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="role">Uloga</label>
                                <input type="text" name="role" class="form-control" placeholder="Uloga"
                                    value="<?php echo $role;?>" />
                            </div>
                            <div class="form-group">
                                <label for="eType">Tip zaposlenja</label>
                                <select type="text" name="eType" class="form-control">
                                    <option>Trajno</option>
                                    <option>Part-Time</option>
                                </select>
                            </div>
                            <label>Status</label><br>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="open"
                                    <?php if($status=='open'){echo "checked='true'";}?>>Otvoreno
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value='closed'
                                    <?php if($status=='closed'){echo "checked='true'";}?>>Zatvoreno
                            </label>
                            <div class="form-group">
                                <button type="submit" name="submitPost" class="btnContact pull-right"> Postavi posao</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="js/tilt.jquery.min.js"></script>
    <script src="js/signinModal.js"></script>
    <?php include 'footer.php';?>


</body>
</html>