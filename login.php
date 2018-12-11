<?php

// Allow the config
define('__CONFIG__', true);
// Require the config
require_once "inc/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/slate/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
         <a class="navbar-brand" href="index.php">Login</a>
      </div>
    </div>
  </nav>
  <div class="container">
    <div class=""></div>
    <form method="post" action="">
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" value="">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" value="">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Login</button>
    </form>
  </div>
</body>
</html>