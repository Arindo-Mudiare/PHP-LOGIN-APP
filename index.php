<?php

// Allow the config
define('__CONFIG__', true);
// Require the config
require_once "inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
         <a class="navbar-brand" href="index.php">PHP Login App</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class="">
    <h1 class="jumbotron">Welcome to the PHP Login App</h1>
    <p>
      <a class="btn btn-success" href="login.php">Login</a>
      <a class="btn btn-primary" href="register.php">Register</a>
    </p>
    
    </div>
    
  </div>
</body>
</html>