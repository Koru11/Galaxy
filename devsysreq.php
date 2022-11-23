<?php
include("config/session.php");
// $productid=$os=$processor=$memory=$graphics=$directx=$network=$storage=$soundcard=$additional=$minos=$minprocessor=$minmemory=$mingraphics=$mindirectx=$minnetwork=$minstorage=$minsoundcard=$minadditional = "";

$product_name=$_SESSION['productname'];
$dev_team_id=$_SESSION['dev_team_id'];

$sqlpid = "SELECT * From product Where product_name='$product_name' AND dev_team_id=$dev_team_id";
$respid = mysqli_query($conn,$sqlpid);
$pid = mysqli_fetch_all($respid,MYSQLI_ASSOC);
foreach ($pid as $pid ) {
  $productid = htmlspecialchars($pid['product_id']);
}

if (isset($_POST["submit"])) {

  $os = $_POST["os"];
  $processor = $_POST['processor'];
  $memory = $_POST['memory'];
  $graphics = $_POST['graphics'];
  $directx = $_POST['directx'];
  $network = $_POST['network'];
  $storage = $_POST['storage'];
  $soundcard = $_POST['soundcard'];
  $additional = $_POST['additional'];
  $minos = $_POST['minos'];
  $minprocessor = $_POST['minprocessor'];
  $minmemory = $_POST['minmemory'];
  $mingraphics = $_POST['graphics'];
  $mindirectx = $_POST['mindirectx'];
  $minnetwork = $_POST['minnetwork'];
  $minstorage = $_POST['minstorage'];
  $minsoundcard = $_POST['minsoundcard'];
  $minadditional = $_POST['minadditional'];


      $sql =  "INSERT INTO product_spec
      (`product_id`, `os`, `processor`, `memory`, `graphics`, `directx`, `network`, `storage`, `soundcard`, `additional`, `minos`, `minprocessor`, `minmemory`, `mingraphics`, `mindirectx`, `minnetwork`, `minstorage`, `minsoundcard`,`minadditional`) VALUES
      ('$productid','$os','$processor','$memory','$graphics','$directx','$network','$storage','$soundcard','$additional','$minos','$minprocessor','$minmemory','$mingraphics','$mindirectx','$minnetwork','$minstorage','$minsoundcard','$minadditional')";
      $result = mysqli_query($conn,$sql);

        //save
        if (mysqli_query($conn,$sql)) {
        header("Location: devproductmgnpage.php");
        }else{
        //errors
        echo"query error: " . mysqli_error($conn);
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
      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">

      <!-- <div class="section"></div> -->
      <div class="section"></div>

      <div class="container">
        <h5 class="white-text center">Enter Recommanded System requirement of product</h5>

        <div class="row">
          <div class="col l4 center"></div>
              <div class="col s4 l4 center-align z-depth-1 indigo darken-3 row" style="display: inline-block; padding: 32px 48px 0px 48px; width:500px; ">

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                  <div class='row'>
                    <div class='col s12'>
                    </div>
                  </div>

                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='os' id='os' />
                      <label for='os'>OS</label>
                    </div>
                  </div>

                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='processor' id='processor' />
                      <label for='processor'>Processor</label>
                    </div>
                  </div>

                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='memory' id='memory' />
                      <label for='memory'>Memory</label>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='graphics' id='graphics' />
                      <label for='graphics'>Graphics</label>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='directx' id='directx' />
                      <label for='directx'>DirectX</label>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='network' id='network' />
                      <label for='network'>Network</label>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='storage' id='storage' />
                      <label for='storage'>Storage</label>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='soundcard' id='soundcard' />
                      <label for='soundcard'>Soundcard</label>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='input-field col s12'>
                      <input class='validate white-text' type='text' name='additional' id='additional' />
                      <label for='additional'>Additional</label>
                    </div>
                  </div>

                  <br/>
              </div>
              <div class="col s12 l4"></div>
        </div>
      </div>


              <div class="container">
                <h5 class="white-text center">Enter Minimum System requirement of product</h5>
                <div class="row">
                  <div class="col l4 center"></div>
                      <div class="col s4 l4 center-align z-depth-1 indigo darken-3 row" style="display: inline-block; padding: 32px 48px 0px 48px; width:500px; ">

                          <div class='row'>
                            <div class='col s12'>
                            </div>
                          </div>

                            <div class='row'>
                              <div class='input-field col s12'>
                                <input class='validate white-text' type='text' name='minos' id='minos' />
                                <label for='minos'>OS</label>
                              </div>
                            </div>

                            <div class='row'>
                              <div class='input-field col s12'>
                                <input class='validate white-text' type='text' name='minprocessor' id='minprocessor' />
                                <label for='minprocessor'>Processor</label>
                              </div>
                            </div>

                            <div class='row'>
                              <div class='input-field col s12'>
                                <input class='validate white-text' type='text' name='minmemory' id='minmemory' />
                                <label for='minmemory'>Memory</label>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='input-field col s12'>
                                <input class='validate white-text' type='text' name='mingraphics' id='mingraphics' />
                                <label for='mingraphics'>Graphics</label>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='input-field col s12'>
                                <input class='validate white-text' type='text' name='mindirectx' id='mindirectx' />
                                <label for='mindirectx'>DirectX</label>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='input-field col s12'>
                                <input class='validate white-text' type='text' name='minnetwork' id='minnetwork' />
                                <label for='minnetwork'>Network</label>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='input-field col s12'>
                                <input class='validate white-text' type='text' name='minstorage' id='minstorage' />
                                <label for='minstorage'>Storage</label>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='input-field col s12'>
                                <input class='validate white-text' type='text' name='minsoundcard' id='minsoundcard' />
                                <label for='minsoundcard'>Soundcard</label>
                              </div>
                            </div>
                            <div class='row'>
                              <div class='input-field col s12'>
                                <input class='validate white-text' type='text' name='minadditional' id='minadditional' />
                                <label for='minadditional'>Additional</label>
                              </div>
                            </div>

                          <br/>
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
    </form>

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
