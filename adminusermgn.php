<?php
include("config/db_connect.php");
$title = "User Management";

//check developer in the database
   $not_approve_check = "SELECT * FROM user";
   $res_n = mysqli_query($conn, $not_approve_check);
   $not_approved = mysqli_fetch_all($res_n, MYSQLI_ASSOC);

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
  include('headeradmin.php');

   ?>
  </header>
  <main>
    <center>
      <section>
        <div class="section"></div>
        <div class="section"></div>
        <div class="section"></div>

        <div class="container" style="width:1500px;">
          <h3 class="white-text">User Management</h3>
            <ul class="collection with-header">
                <li class="collection-header pink lighten-1"><a href="devregister.php" class="white-text"><h4>Approved Users</h4></a></li>
                <li class="collection-item">
                  <div class="row">
                        <div class="col s2">User ID</div>
                        <div class="col s2">Username</div>
                        <div class="col s2">Email</div>
                        <div class="col s2">ProfileName</div>
                        <div class="col s2">Date_created</div>
                        <div class="col s2">Delete</div>


                  </div>
                  <?php foreach ($not_approved as $not_approved) {?>
                      <div class="row">
                        <div class="col s2"><?php echo htmlspecialchars($not_approved['user_id']); ?></div>
                        <div class="col s2"><?php echo htmlspecialchars($not_approved['username']); ?></div>
                        <div class="col s2"><?php echo htmlspecialchars($not_approved['email']); ?></div>
                        <div class="col s2"><?php echo htmlspecialchars($not_approved['profile_name']); ?></div>
                        <div class="col s2"><?php echo htmlspecialchars($not_approved['date_created']); ?></div>
                        <div class="col s2"><a class="brand-text" href="5userdelete.php?userid=<?php echo htmlspecialchars($not_approved['user_id']); ?>">Delete</a></div>
                      </div>
                  <?php  }?>
              </li>

              </ul>
        </div>

<div class="container">


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
