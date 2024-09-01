<?php

session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!==true){
  header("Location:login.php");
exit;
}


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome <?php echo $_SESSION['username'];  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}


.hero-section {
  background: url('https://wp-defenx-2020.s3.eu-west-2.amazonaws.com/media/2016/11/hero-bg.jpg') no-repeat center center/cover;
  color: #fff;
  text-align: center;
  padding: 4rem 2rem;
}

.hero-section .container {
  max-width: 600px;
  margin: 0 auto;
}

.hero-section h1 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.hero-section p {
  font-size: 1.25rem;
  margin-bottom: 2rem;
}

.btn {
  background-color: #007BFF;
  color: #fff;
  padding: 0.75rem 1.5rem;
  text-decoration: none;
  border-radius: 5px;
  font-size: 1rem;
}

.btn:hover {
  background-color: #0056b3;
}

  </style>
  <body>
 <?php require "others/navbar.php";   ?>


  
  <header id="home" class="hero-section">
    <div class="container">
      <h1>Hello <?php echo $_SESSION['username']; ?> </h1>
      <h1>Bienvenue sur notre site web</h1>
      <p>Découvrez nos services et apprenez-en plus sur nous.</p>
      <a href="#services" class="btn">Nos Services</a>
    </div>
  </header>
  
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>