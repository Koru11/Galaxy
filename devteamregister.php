<?php

include("config/session.php");
$teamname = $teamemail = $password = $repassword = "";
$errors =  array('teamemail'=>'','teamname'=>'','password'=>'','repassword'=>'');
if (isset($_POST["submit"])) {

//checking email
  if(empty($_POST["teamemail"])){
  $errors["teamemail"] = "An email is required";
  }else if (!empty($_POST["teamemail"])) {
  $teamemail = $_POST["teamemail"];
  $sql_te = "SELECT * FROM dev_team WHERE dev_team_email='$teamemail'";
  $res_te = mysqli_query($conn, $sql_te);
  if (mysqli_num_rows($res_te) > 0) {
      $errors["teamemail"] = "Email already exist";
    }
  }



//checking teamname
  if(empty($_POST["teamname"])){
  $errors["teamname"] = "An Team Name is required <br/>";
}else{
  $teamname = $_POST["teamname"];
  $sql_tu = "SELECT * FROM dev_team WHERE dev_team='$teamname'";
  $res_tu = mysqli_query($conn, $sql_tu);
  if (mysqli_num_rows($res_tu) > 0) {
  	  $errors["teamname"] = "Team Name already exist";
  	}
  }


if(array_filter($errors)){
}else {
        $teamemail = mysqli_real_escape_string($conn, $_POST["teamemail"]);
        $teamname = mysqli_real_escape_string($conn, $_POST["teamname"]);

      //create sql
        $sql =  "INSERT INTO dev_team(dev_team,dev_team_email,team_admin_id,approval)VALUES('$teamname','$teamemail','$id',0)";
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
      <h5 class="white-text">Please, enter information of the team creating.</h5>
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
                      <label for='teamname'>Enter your Team Name</label>
                    </div>
                  </div>
                  <div class='row'>
                    <div class="red-text"> <?php echo  $errors['teamemail']; ?>  </div>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='email' name='teamemail' id='teamemail' />
                      <label for='teamemail'>Enter your Team Email</label>
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
