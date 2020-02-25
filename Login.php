<?php

$host="localhost";
$user="root"; //Maybe a different user
$password="";
$db="test"; // Test db in phpMyAdmin

$connection = mysqli_connect($host,$user,$password);
  $mysqli_select_db($connection,$db);

  if(isset($_POST['email'])) {
    $uname=$_POST['email'];
    $password=$_POST['password'];

    $sql="select * from loginform where user='".$uname."' AND '".$password."' limit 1";

    $result=mysqli_query($connection,$sql);

    if(mysqli_num_rows($result)==1){
      echo " You have successfully logged in";
      exit();

    }
    else {
      echo " You have entered Incorrect Username or Password.";
      exit();
    }

  }

?>

</<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/Login.css">
    <script src="js/Login.js"></script>
  </head>
  <body>
    <!-- Left side of screen -->
    <div id="Splash" class="split left">
    </div>
    <!-- Right side of screen -->
    <div id="Content" class="split right">
      <!-- Logo Above Form -->
      <div id="LogoArea" class="top">
        <img id="kettle" src="img/kettlePng.png" alt="logo">
      </div>
      <!-- Form -->
      <form class="pure-form pure-form-aligned"  method="POST" action="#">
        <fieldset id="Form_input">

          <div>
            <span>Please enter OTC Email and Password<br><br></span>
          </div>

          <div id="emailGroup" class="pure-control-group">
            <label id="emailLabel" for="username">Email Address</label>
            <input id="username" name="username" placeholder="Email Address">
          </div>

          <div id="passwordGroup" class="pure-control-group">
            <label id="passwordLabel" for="password">Password</label>
            <input id="password" name="password" type="password" placeholder="Password">
          </div>

          <div id="subButtonDiv">
            <button id="subButton" name="submit" type="submit">Submit</button>
          </div>

        </fieldset>
      </form>



    </div>

  </body>
</html>
