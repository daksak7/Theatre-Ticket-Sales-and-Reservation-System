<?php session_start();?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script scr="script/main.js"></script>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/styles.css">
<style type="text/css">   body {background-color: rgba(95, 95, 145, 0.3);</style>



  <style>
  body
  {
   margin:0;
   padding:0;
   background-color:#f1f1f1;
  }
  .box
  {
   width:1270px;
   padding:20px;
   background-color:#fff;
   border:1px solid #ccc;
   border-radius:5px;
   margin-top:25px;
   box-sizing:border-box;
  }
  </style>




    <title>TTSRS-ADMIN PANEL</title>
  </head>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="admin.php">TTSRS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          STAFF
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="calisanincele.php">SEARCH</a>
                    <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="calisanislemleri.php">ADD/EDIT/DELETE</a>
        </div>
      </li>
        <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          MEMBER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="üyeincele.php">SEARCH</a>
                    <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="üyeislemleri.php">ADD/EDIT/DELETE</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          THEATRE
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tiyatroincele.php">SEARCH</a>
                    <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="tiyatroislemleri.php">ADD/EDIT/DELETE</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SHOW
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="gösteriincele.php">SEARCH</a>
                    <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="gösteriislemleri.php">ADD/EDIT/DELETE</a>
        </div>
      </li>



    </ul>

        <ul class="navbar-nav mr-auto">

             &nbsp;&nbsp;&nbsp;&nbsp;       


      &nbsp;&nbsp;&nbsp;&nbsp;   

    </ul>
    
    <a class="btn btn-danger" href="logout.php" role="button">Logout</a>

  </div>
</nav>