<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $login=false;
  $showError=false;
    include( "others/dbConnect.php");
    $username=$_POST["username"];
    $phone=$_POST["phone"];
    $password=$_POST["pswd"];


    $sql="SELECT * FROM users WHERE phone='$phone' AND username='$username' AND password='$password';";

    $result=mysqli_query($conn,$sql);
  $num = mysqli_num_rows($result);

  if($num){
    session_start();
    $_SESSION['loggedin']=true;
    $_SESSION['username']=$username;
    header("Location:welcome.php");
  }else{
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  Invalid Username or Password.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
  }
  
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>


.login-container {
  background: white;
  border: 2px solid #000;
  padding: 40px;
  width: 320px;
  box-shadow: 10px 10px 0 #000;
  text-align: center;
  margin:auto;
  margin-top:10%;
}

h1 {
  font-size: 28px;
  margin-bottom: 30px;
}

.input-group {
  margin-bottom: 20px;
  text-align: left;
}

label {
  display: block;
  margin-bottom: 8px;
  font-size: 16px;
}

input {
  width: 100%;
  padding: 12px;
  border: 2px solid #000;
  box-shadow: 3px 3px 0 #000;
  font-size: 14px;
}

button {
  background-color: #ffcc00;
  border: 2px solid #000;
  padding: 12px;
  width: 100%;
  cursor: pointer;
  box-shadow: 3px 3px 0 #000;
  font-size: 16px;
}

button:hover {
  background-color: #ffeb3b;
}

@media (max-width: 600px) {
  .login-container {
    width: 90%;
    padding: 30px;
  }
}
</style>
<body>
 <?php require "others/navbar.php";   ?>

<div class="container signup">

    <div class="login-container">
  <h1>Login</h1>
  <form id="loginForm" method="post" action="login.php">
    <div class="input-group">
      <label for="phone">Phone number</label>
      <input type="number" id="phone" name="phone" required>
    </div>
    <div class="input-group">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
    </div>
    <div class="input-group">
      <label for="password">Password</label>
      <input type="password" id="password" name="pswd" required>
    </div>
    <button type="submit">Login</button>
    <br><br><br>
  </form>
  <b>If you are new user then :</b>
  <a href="/loginsys/signup.php"><button type="submit">Sign up</button></a>
</div>

</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>