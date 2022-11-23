<?php
include("config/session.php");

?>


<html>

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


  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    /* .flexbox {
        display: flex;
        flew-wrap: wrap;
        justify-content: center;
        align-items: center;
      } */



/*
    .input-field input[type=date]:focus + label,
    .input-field input[type=text]:focus + label,
    .input-field input[type=email]:focus + label,
    .input-field input[type=password]:focus + label {
      color: #e91e63;
    }

    .input-field input[type=date]:focus,
    .input-field input[type=text]:focus,
    .input-field input[type=email]:focus,
    .input-field input[type=password]:focus {
      border-bottom: 2px solid #e91e63;
      box-shadow: none;
    } */
  </style>
</head>

<body>
  <header>
    <?php
  if(isset($_SESSION["log_username"])){
    $session = $_SESSION["log_username"];
    include("header2.php");
  }else{
    include("header.php");
  }
   ?>
  </header>
  <main>
    <center>
      <section>
        <div class="section"></div>
        <div class="section"></div>
        <div class="section"></div>

        <div class="container">
            <ul class="collection with-header">
                <li class="collection-header indigo lighten-1"><a href="devregister.php" class="white-text"><h4>Enter a Developer Team</h4></a></li>
                <li class="collection-item">
                    <div class="left-align">
                      <p>What you need to enter a Developer Team:</p>
                      <p>-Need A Galaxy User Account</p>
                      <p>-A correct Team Name(Case sensitive)</p>
                      <p>-Need a Developer_Team_ID</p>
                      <p>-Need a Admin ID of the Developer Team you are joining.</p>
                      <p>-All three above must be correct and matched</p>
                      <p>-The team you're joining must be approved by Galaxy Admin</p>
                      <p>-Wait for the approval by the Developer Team admin after requesting the Team</p>

                    </div>
              </li>

              </ul>
        </div>

<div class="container">
    <ul class="collection with-header">
        <li class="collection-header indigo lighten-1"><a href="devteamregister.php" class="white-text"><h4>Create a Developer Team</h4></a></li>
        <li class="collection-item">
            <div class="left-align">
              <p>What you need and process to create a Developer Team:</p>
              <p>-Need A Galaxy User Account</p>
              <p>-Need Team Name</p>
              <p>-Need A Team Email</p>
              <p>-Request the Admin to create team (Through above link Page)</p>
              <p>-The admin approval to create team (Wait until approved after registering)</p>
              <p>-You will receive a Developer_Team_ID after the approval</p>
              <p>-The person registering the team is the Team Admin</p>
              <p>-You can add people to your team by giving approved Developer_Team_ID</p>
            </div>
      </li>

      </ul>
</div>


      </section>


    </center>
    <div class="section"></div>
    <div class="section"></div>
  </main>
  <footer><?php include ("footer.php"); ?></footer>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script>
  $(document).ready(function(){
    $(".sidenav").sidenav();
  })
  </script>
</body>

</html>
