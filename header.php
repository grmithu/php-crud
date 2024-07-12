<?php 
  ob_start();
  include "db.php"; 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP CRUD</title>


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">


  </head>
  <body>


  <section>
    <div class="container">
    <nav class="navbar navbar-head navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="index.php">CREATE</a>
                    <a class="nav-link" href="allUsers.php">READ</a>
                    <!-- <a class="nav-link" href="updateUsers.php">UPDATE</a> -->
                </div>
            </div>
        </div>
        </nav>
    </div>
</section>
