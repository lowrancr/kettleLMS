<!-- 
    Author: Kettle Team
    Last modified: 2/28/20
    Last modified by: Ross Lowrance
 -->

 <?php 
   $SERVER["DOCUMENT_ROOT"] = "C:\xampp\htdocs\kettleLMS"
?>

<!DOCTYPE html>
<html>
<head>
<title>Kettle Project</title>
<link rel="stylesheet" type="text/css" href="css/splash.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='icon' href='img/kettle.JPG' type='image/x-icon'/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>

<body>
<div class="sidenav">
	<img src="img/signin.JPG" alt="OTC" style="width:100%;height:100vh;">
	</div>
    <div class="container">
        <h2>Kettle Login</h2>
        <form action="home.php">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          </div>
          <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
      </div>
</body>
</html>