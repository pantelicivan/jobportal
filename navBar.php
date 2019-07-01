<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse"
    style="box-shadow: 0px 3px 4px rgba(225, 225, 225, .6); font-family: 'Kodchasan', sans-serif;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="#" style="">Poslovi</a> </div>
        <div class="collapse navbar-collapse" id="defaultNavbar1">
            <ul class="nav navbar-nav navbar-right ">
                <li><a href="index.php">Poslovi</a></li>
                <?php 
                
               if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
                if(isset($_SESSION['login_user']))   
                              
 {
                    $myusername = $_SESSION['login_user'];
   echo ' <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$myusername.'<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="seekerAccount.php">Moj profil</a></li>
             <li><a href="AppliedJobs.php">Konkurisani poslovi</a></li>
             <li><a href="logout.php">Odjavi se</a></li>
       
          </ul>
        </li>';
 }
 if(isset($_SESSION['login_employer'])) 
                               
 {
                    $myusername = $_SESSION['login_employer'];
   echo ' <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">'.$myusername.'<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="employerAccount.php">Moj profil</a></li>
             <li><a href="postjob.php">Postavi posao</a></li>
              <li><a href="ViewApplicants.php">Pogledaj prijave</a></li>
            <li><a href="logout.php">Odjavi se</a></li>
       
          </ul>
        </li>';
 }
 elseif(!isset($_SESSION['login_employer']) && !isset($_SESSION['login_user']))
     {
   
    echo '<li><a id="loginAnchor" href="#" data-toggle="modal" data-target="#myEmployerModal">
  Prijavi se/Registruj se 
</a></li>';
     
 }  ?>

                <li><a href="blog.php">Blog</a></li>
                <li><a href="events.php">Dogadjaji</a></li>
                <li><a href="#contactus">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>