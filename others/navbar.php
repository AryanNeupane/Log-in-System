<?php
// session_start();
if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
  $loggedin=true;
}else{
  $loggedin=false;
}
 echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">AKA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/loginsys/welcome.php">Home</a>';
      if(!$loggedin){
        echo' <a class="nav-link" href="/loginsys/signup.php ">Sign Up</a>
        <a class="nav-link" href="/loginsys/login.php">Log In</a>';
      }
        
       if($loggedin){
          echo'<a class="nav-link" href="/loginsys/logout.php">Log Out</a>';
      }

     echo'  </div>
            </div>
            </div>
            </nav>';

?>