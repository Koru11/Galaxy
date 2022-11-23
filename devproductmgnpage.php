<?php
include("config/session.php");

//check if the user is admin
$admin_check = "SELECT * from dev_team WHERE team_admin_id='$id'";
$res_a = mysqli_query($conn, $admin_check);
$admin = mysqli_fetch_all($res_a, MYSQLI_ASSOC);

foreach($admin as $admin){
        $dev_team_id = htmlspecialchars($admin['dev_team_id']);
        $dev_team = htmlspecialchars($admin['dev_team']);
        $dev_team_email = htmlspecialchars($admin['dev_team_email']);
        $date_registered = htmlspecialchars($admin['date_registered']);
        $dev_approval = htmlspecialchars($admin['approval']);
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
                <li class="collection-header indigo lighten-1"><h4 class="white-text">List Your Product on Galaxy</h4></li>
                <li class="collection-item">
                    <div class="left-align">
                      <p>!!Please Read Carefully before entering!!</p>
                      <p>What you need to enter a Developer Team:</p>
                      <p>-An approved Developer account</p>
                      <p>-A Product Name</p>
                      <p>-Images of the product(at least 1)</p>
                      <p>-replace images if all 4 images are not available</p>
                      <p>-Product must be only uploaded as ZIP, RAR, 7z files.</p>
                      <p>-The files must be named as following format included without semicolon or single quote as dev_team_idproduct_name.fileextension (example: 9bleachheatsoul2.zip)</p>
                      <p>-If you're uploading music please include (music) after the product name when entering name in the product name section. ( example: 'Let It Go (music)' )</p>
                      <p>-Only the Team Creator can manage the products of its team.</p>
                      <p>-Product uploaded as team members are only manageable by Team Creator</p>
                      <p>-The Product is accessed by admins and need approval by them to list</p>
                      <p>-Wait for Approval</p>
                      <p>-The developer Team of the product will be listed as the team you've entered</p>
                      <p>-You can also enter as individual creators but your team will still be shown as Developer Team.</p>
                    </div>
                    <a href="productregister.php" class="btn-large btn-hover indigo darken-2">Confirm</a>
              </li>

              </ul>
        </div>
<?php if (mysqli_num_rows($res_a) >0) { ?>
<div class="container">
    <ul class="collection with-header">
        <li class="collection-header indigo lighten-1"><a href="devproductmgn.php" class="white-text"><h4>Manage Your Team Product</h4></a></li>
        <li class="collection-item">
            <div class="left-align">
              <p>-You are a Team Admin. Only You can see this section</p>
              <p>-Manage Your Team Products through here</p>
              <p>-You can see every uploads that members of your team have made wheather approved or not by server admins</p>
              <p>-Approved Products are shown as 1 and unapproved as 0</p>
              <p>-You can delete uploads you do not want</p>
            </div>
      </li>

      </ul>
</div>
<?php } ?>

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
