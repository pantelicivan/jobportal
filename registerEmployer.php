<?php
include 'connect.php';

$name =$email= $password="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $name = $_POST["name"];
     $email = $_POST["email"];
     $password = $_POST["password"];
     
     
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["logo"]["name"]);
$fileName= basename($_FILES["logo"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// provera da li je fajl stvarno slika
    $check = getimagesize($_FILES["logo"]["tmp_name"]);
    if($check !== false) {
        echo "Fajl je slika - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "Fajl nije slika!";
        $uploadOk = 0;
    }

if (file_exists($target_file)) {
    echo "Fajl vec postoji.";
    $uploadOk = 0;
}

// provera velicine slike
if ($_FILES["logo"]["size"] > 500000) {
    echo "Vas fajl je prevelik.";
    $uploadOk = 0;
}
// provera formata slike
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Samo JPG, JPEG, PNG & GIF formati su dozvoljeni.";
    $uploadOk = 0;
}
// provera da li je fajl ucitan
if ($uploadOk == 0) {
    echo "Vas fajl nije ucitan.";
// ako je ucitan, upload
} else {
    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
    } else {
        echo "Dogodila se greska prilikom upload - a fajla.. Pokusajte ponovo.";
    }
}

     
    
    $sql = "INSERT INTO employer (name,email,password,logo)
VALUES ('$name', '$email', '$password','$fileName')";

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
                    <h3>Poslodavac je registrovan.. Ulogujte se da nastavite</h3>
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
    $conn->close();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}else{
    header("location : index.php");
}