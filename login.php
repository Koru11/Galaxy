<?php
include("config/db_connect.php");
$errors =  array('username'=>'','password'=>'');

if(isset($_POST["submit"])){
  session_start();

      $username = mysqli_real_escape_string($conn,$_POST['username']);
      $password = mysqli_real_escape_string($conn,$_POST['password']);

  //checking username and password
    if(empty($_POST["username"])){
      $errors["username"] = "Please enter username and password";
    }
    if($username== 'adminuser'&& $password =='adminpassword'){
      if(session_destroy()) {
        header ("location: adminlogin.php");
      }
    }
    else if (!empty($_POST["username"])) {
        $sql_u = "SELECT * FROM user WHERE username='$username' and password = '$password'";
        $result = mysqli_query($conn, $sql_u);

        //fetch
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $res_u = mysqli_query($conn, $sql_u);
        if (mysqli_num_rows($res_u) > 0) {
           // session_register("username");
           $_SESSION['log_username'] = $username;
           $_SESSION['log_userid'] = $user_id;
           $_SESSION["profile_name"] = $user['profile_name'];
           header("location: galaxy.php");
         }
          else {
              $errors["username"] = "Wrong Username or Password";
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
    /* body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    } */

    /* .flexbox {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
      } */

    main {
      flex: 1 0 auto;
    }
    .one {
        width: 20vw;
        height: 20vw;
        background-color: #76ccde;
        float: left;
        margin-left: 10px;
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
  <header><?php include ("header.php"); ?></header>
  <div class="section"></div>
  <main>
    <center>
      <!-- <div class="section"></div> -->
      <h5 class="white-text">Please, login into your account</h5>
      <div class="section"></div>

      <div class="container">
        <div class="row">
          <div class="col l4"></div>
              <div class="col s12 m12 l4 center-align z-depth-1 indigo darken-3" style="display: inline-block; padding: 32px 48px 0px 48px;">

                <form action="<?php echo $_SERVER["PHP_SELF"] ?>"class="col s12" method="post">
                  <div class='row'>
                    <div class='col s12'>
                    </div>
                  </div>

                  <div class='row'>
                    <div class="red-text"> <?php echo  $errors['username']; ?>  </div>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='username' id='username' />
                      <label for='username'>Enter your username</label>
                    </div>
                  </div>

                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='password' name='password' id='password' />
                      <label for='password'>Enter your password</label>
                    </div>
                    <label style='float: right;'>
      								<a class='white-text' href='reset.php'><b>Forgot Password?</b></a>
      							</label>
                  </div>

                  <br />
                  <center>
                    <div class='row'>
                      <button type='submit' name='submit' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                    </div>
                  </center>
                </form>
              </div>
              <div class="col s12 l4"></div>
        </div>
        </div>
      <a href="user_register.php" class='white-text'>Create account</a>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
  <footer style="position: relative; top:100px;"><?php include ("footer.php"); ?></footer>
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
