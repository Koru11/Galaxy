
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
      .logo{
        position: relative;
        bottom: 20px;
      }
      .btn-large {
        box-shadow: 0 1px 2px rgba(0,0,0,0.15);
        transition: all 0.3s ease-in-out;
          }
      .btn-hover{
        width:150px
      }

      .btn-hover::after {
        content: "";
        border-radius: 5px;
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        opacity: 0;
        -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
        transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
      }

      .btn-hover:hover {
        -webkit-transform: scale(1.25, 1.25);
        transform: scale(1.25, 1.25);
      }

      .btn-hover:hover::after {
          opacity: 1;
      }

       .g{
        position: relative;
        left: 50px;
        width: 250px;
        height: 80px;
        text-align: center;
        padding-top: 20px;
        position: fixed;
        left: 1650px;


      }

      .hcontainer {
        margin: 0 auto;
        max-width: 1920px;
        width: 100%;
      }
      @media only screen and (min-width: 601px) {
        .hcontainer {
          width: 100%;
        }
      }
      @media only screen and (min-width: 993px) {
        .hcontainer {
          width: 100%;
        }
      }

      body{
        background: #3f51b5   ;
      }
      .background{
        background: url(img/stars.jpg);
        background-size: cover;
        background-position: center;
        min-height: 80px;
      }
        nav{
          height: 75px;
          line-height: 75px;
        }
        .btn-hover:hover{
          width:150px
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
    <header>
      <div class="navbar-fixed">
        <nav class="nav-wrapper background">
            <div class="hcontainer">
              <div class="row">
                <!-- Brand logo -->
                <div class="col s3 l1 logo center-align">
                  <h3><a href="galaxy.php">Galaxy</a></h3>

                </div>

                <!-- navbar content -->
                <div class="col s7 l8" style="position:relative; left:30px;">
                  <ul class="hide-on-med-and-down">
                    <li><a href="galaxy.php" class="btn-large btn-hover indigo darken-2" style="width:100px;">Home</a></li>
                    <li><a href="#" class="btn-large btn-hover indigo darken-2" style="width:100px;">Help</a></li>
                    <li><a href="browse.php" class="btn-large btn-hover indigo darken-2" style="width:120px;">Browse</a></li>
                    <!-- <li><a href="login.php" class="btn-large btn-hover indigo darken-1"><?php echo $pname ?></a></li> -->
                    <!-- <li><a class='btn-large indigo darken-2 dropdown-trigger' style="width:230px;" href='#' data-target='dropdown1'><i class="left material-icons white-text">person</i><?php echo $pname ?></a></li> -->
                    <li><a class='btn-large indigo darken-2 dropdown-trigger' style="width:230px;" href='#' data-target='dropdown1'><img src="<?php echo $ppic ?>" height="35" width="35"alt="No Img" style="position:relative; top:10px; right:35px;"><?php echo $pname ?></a></li>

                  </ul>
                </div>

                <div class="col l2 hide-on-med-and-down">

                  <li><a href="galaxy.php" class="btn-large g indigo darken-4" style='position: relative;left: 50px;width: 250px;height: 80px;text-align: center;padding-top: 20px;position: fixed;left: 1650px;font-size:14px;'><i class="left material-icons">get_app</i>Get Galaxy Client</a></li>
                </div>
                <div class="col s2">
                  <a href="#"class="sidenav-trigger hide-on-med-and-up" data-target="mobile-menu">
                    <i class="material-icons">menu</i>
                  </a>
                </div>
               </div>
              </div>
          </div>

          <!-- sidenav content -->
          <ul class="sidenav grey lighten-4" id="mobile-menu">
            <li><a href="galaxy.php" class="">Home</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="browse.php">Browse</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php">Logout</a></li>


          </ul>
          <!-- Dropdown Structure -->
          <ul id='dropdown1' class='dropdown-content indigo darken-1'>
            <li><a href="profile.php" class="white-text">Profile</a></li>
            <li><a href="library.php" class="white-text">Library</a></li>
            <li class="divider" tabindex="-1"></li>
            <li><a href="browse.php" class="white-text">Browse</a></li>
            <li><a href="#!" class="white-text"><i class="material-icons">view_module</i>Help</a></li>
            <li><a href="logout.php" class="white-text"><i class="material-icons">keyboard_backspace</i>Logout</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
      $(".sidenav").sidenav();
      $(".dropdown-trigger").dropdown();
    })
    </script>
  </body>
</html>
