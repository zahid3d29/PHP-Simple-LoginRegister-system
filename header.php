<?php

  // Report simple running errors
  error_reporting(E_ERROR | E_WARNING | E_PARSE); 

  
  // Session starting
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PHP - Login Register System</title>

  <!-- All style -->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">



</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">ZEDEND</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <?php
          if(isset($_SESSION['userId'])){
            echo '<form action="inc/logout.inc.php" class="form-inline my-2 my-lg-0">
            <button type="submit" name="logout-submit" class="btn btn-success ml-1">Logout</button> 
          </form>';
          }else{
            echo ' <form class="form-inline my-2 my-lg-0">
            <a href="login-form.php"> <button type="button" class="btn btn-danger">login</button> </a>
            <a href="signup-form.php"> <button type="button" class="btn btn-success ml-1">Register</button> </a>
            </form>';
          }
        ?>

       
        


      </div>
    </div>
  </nav>

