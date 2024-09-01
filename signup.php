<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include( "others/dbConnect.php");
    $username=$_POST["username"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $password=$_POST["pswd"];
    $cpassword=$_POST["cpswd"];
    $exists=false;
    if(($password==$cpassword)&& $exists==false){
        $sql="INSERT INTO `users` ( `username`, `email`, `phone`, `password`) VALUES ( '$username', '$email', '$phone', '$password');";
        $result=mysqli_query($conn,$sql);
        if(!$result){
            echo mysqli_error($conn);
		}else{
  		header("Location:login.php");
		}
	}else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
          Something is wrong. Check if passwords are same
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
		echo mysqli_error($conn);

    
    }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <style>
    .signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 50px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 10px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 12px;
	border: none;
	outline: none;
	border-radius: 5px;
}
button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 30px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}

  </style>
  <body>
 <?php require "others/navbar.php";   ?>

<div class="container signup">
    <h1 class="text-center">Signup to our website</h1>
<form action="/loginsys/signup.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
          <input type="number" name="phone" placeholder="Phone Number" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					<input type="password" name="cpswd" placeholder="Confirm Password" required="">
					<button>Sign up</button>
				</form>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>