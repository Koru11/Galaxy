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
      .
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
        background: #f48fb1;
      }
      .background{
        background-size: cover;
        background-position: center;
        min-height: 80px;
      }
        nav{
          height: 75px;
          line-height: 75px;
        }
        /* Transition to a bigger shadow on hover */
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

                <!-- navbar content -->
                <div class="col l12">
                  <ul class="hide-on-med-and-down">
                    <li><a href="adminpage.php" class="btn-large btn-hover pink darken-2"><i class="material-icons left">keyboard_arrow_left</i>Back</a></li>
                    <li><h5><?php echo $title ?></h5></li>
                  </ul>
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
        </nav>
      </div>
    </header>

    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
      $(".sidenav").sidenav();
      $(".materialbox").materialbox();


    })
    </script>
  </body>
</html>
