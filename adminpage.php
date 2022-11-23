<?php
    include('config/db_connect.php');
    session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <title></title>
      <style>
      body{
        background: #f48fb1;
      }


        nav{
          height: 75px;
          line-height: 75px;
        }
        .container{
          width: 5000px;
        }
        /* label focus color */
         .input-field input:focus + label {
           color: white !important;
         }
         .input-field [type=text]{
           color:white;
      }
         /* label underline focus color */
         .row .input-field input:focus {
           border-bottom: 1px solid #3949ab !important;
           box-shadow: 0 1px 0 0 #3949ab !important
         }
      </style>
  </head>
  <body>
    <header><div class="container white-text"><h3>Hello Admin</h3></div>
            </div>

    </header>

    <section>
      <div class="container">
        <ul class="collection with-header">
        <a href="admindevteammgn.php" class="collection-item black-text"><h4>Manage Developer Teams</h4></a>
        <a href="admindevmgn.php" class="collection-item black-text"><h4>Manage Developers</h4></a>
        <a href="adminproductmgn.php" class="collection-item black-text"><h4>Product Management</h4></a>
        <a href="adminusermgn.php" class="collection-item black-text"><h4>User Management</h4></a>
        <a href="salesrevenue.php" class="collection-item black-text"><h4>Sales and Revenue</h4></a>
      </ul>
    </div>
<div class="container white-text"><a class="white-text btn-large hoverable" href="index.php">Go Back</a>

    </section>

    <footer><?php include ("footer.php"); ?></footer>


    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
      $(".sidenav").sidenav();
      $(".parallax").parallax();
    })
    </script>
  </body>
</html>
