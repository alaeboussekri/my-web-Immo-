<?php
session_start();
include('dbcon.php');

if(isset($_POST['ok'])){
 require('auth.php');
} 
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Wavy login form</title>
  <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet">
  <link rel="stylesheet" href="./css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<form class="login" action="auth.php" method="POST">
  <input type="text" placeholder="Cin" name="cin">
  <input type="password" placeholder="Password" name="pass">
  <button name="ok">Login</button>
</form>

<a href="https://codepen.io/davinci/" target="_blank">check my other pens</a>
<!-- partial -->
  
</body>
</html>
