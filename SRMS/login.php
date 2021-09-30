<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Result Management System</title>
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <header>
      <div class="container-fluid" >
        <nav class="navbar navbar-expand-md navbar-dark bg-dark " style="width: 100%;">
            <span class="navbar-text">Student Result Management System </span>


        </nav>

        <div class="container">
          <div class="jumbotron" style="background-color:#f8f9fa;">
            <h1 style="color:#343a40">Student Result Management System </h1> <br>
            <a href="user-login.php" type="button" class="btn btn-primary btn-block" >Admin</a>
            <a href="studentdash.php" type="button" class="btn btn-primary btn-block" >Student Results</a>
          </div>
        </div>
      </div>
      </header>

  </body>
</html>
