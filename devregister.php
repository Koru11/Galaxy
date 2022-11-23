<?php

include("config/session.php");
$teamname = $teamid = $teamadminid = "";
$errors =  array('teamname'=>'','teamid'=>'','teamadminid'=>'');
if (isset($_POST["submit"])) {
//Checking Conditions for entering the DEV TEAM
if (empty($_POST["teamname"]) || empty($_POST["teamid"]) || empty($_POST["teamadminid"])) {
      if(empty($_POST["teamname"])){
      $errors["teamname"] = "A Team Name is required";
      }
      if(empty($_POST["teamid"])){
      $errors["teamid"] = "A Team ID is required";
      }
      //checking teamname
      if(empty($_POST["teamadminid"])){
      $errors["teamadminid"] = "A Team Admin ID is required <br/>";
      }
    }
elseif (!empty($_POST["teamname"]) && !empty($_POST["teamid"]) && !empty($_POST["teamadminid"])) {
      $teamid = $_POST["teamid"];
      $teamname = $_POST["teamname"];
      $teamadminid = $_POST["teamadminid"];
      $sql_tn = "SELECT * FROM dev_team WHERE dev_team='$teamname' AND dev_team_id='$teamid' AND team_admin_id='$teamadminid' AND approval=1";
      $res_tn = mysqli_query($conn, $sql_tn);
      if (!mysqli_num_rows($res_tn) > 0) {
          $errors["teamname"] = "Please Enter the Correct Matching Informations and make sure that the team is approved.";
        }
}

//INSERTING DEV INFORMATION
if(array_filter($errors)){
}else {
        $teamid = mysqli_real_escape_string($conn, $_POST["teamid"]);
        $teamname = mysqli_real_escape_string($conn, $_POST["teamname"]);

      //create sql
        $sql =  "INSERT INTO dev(user_id,dev_team_id,approval)VALUES('$id','$teamid',0)";
        //save
              if (mysqli_query($conn,$sql)) {
                //success
                header("Location: profile.php");

              }else{
                //errors
                echo"query error: " . mysqli_error($conn);
              }

          }

 }
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

    .flexbox {
        display: flex;
        flew-wrap: wrap;
        justify-content: center;
        align-items: center;
      }
    main {
      /* flex: 1 0 auto; */
    }

    body {
      background: #fff;
    }

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
    }
  </style>
</head>

<body>
  <header><?php
  if(isset($_SESSION["log_username"])){
    $session = $_SESSION["log_username"];
    include("header2.php");
  }else{
    include("header.php");
  }

           ?>
  </header>
    <div class="section"></div>

  <main>
    <center>
      <!-- <div class="section"></div> -->
      <h5 class="white-text">Please, enter information of the team entering.</h5>
      <div class="section"></div>

      <div class="container">
        <div class="row">
          <div class="col l4"></div>
              <div class="col s4 l4 center-align z-depth-1 indigo darken-3 row" style="display: inline-block; padding: 32px 48px 0px 48px;">

                <form class="col s12" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                  <div class='row'>
                    <div class='col s12'>
                    </div>
                  </div>

                  <div class='row'>
                    <div class="red-text"> <?php echo  $errors['teamname']; ?>  </div>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='teamname' id='teamname' />
                      <label for='teamname'>Enter the Team Name you're entering</label>
                    </div>
                  </div>

                  <div class='row'>
                    <div class="red-text"> <?php echo  $errors['teamid']; ?>  </div>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='teamid' id='teamid' />
                      <label for='teamid'>Enter the Team ID you're entering </label>
                    </div>
                  </div>

                  <div class='row'>
                    <div class="red-text"> <?php echo  $errors['teamadminid']; ?>  </div>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='teamadminid' id='teamadminid' />
                      <label for='teamadminid'>Enter the ID of admin of the team you're entering </label>
                    </div>
                  </div>

                  <br />
                  <center>
                    <div class='row'>
                      <button type='submit' name='submit' class='col s12 btn btn-large waves-effect indigo'>Register</button>
                    </div>
                  </center>
                </form>
              </div>
              <div class="col s12 l4"></div>
        </div>
        </div>
      </div>
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
