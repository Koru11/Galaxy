<?php
session_start();
include('config/db_connect.php');
$output="";

if(isset($_GET['search'])){
  $searchq = $_GET['search'];
  $searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

  // $query = mysql_query("SELECT * FROM product WHERE product_name LIKE '%$searchq%'") or die("could not search!");

  $sqlnew="SELECT * FROM `product`WHERE product_name LIKE '%$searchq%' AND approval=1";
  $resultnew= mysqli_query($conn,$sqlnew);
  $new = mysqli_fetch_all($resultnew,MYSQLI_ASSOC);

  $count = mysqli_num_rows($resultnew);

  if ($count == 0) {
    $output = "No Result Found";
  }
}else{
  $sqlnew="SELECT * FROM `product` ORDER BY `product`.`date_created` DESC";
  $resultnew= mysqli_query($conn,$sqlnew);
  $new = mysqli_fetch_all($resultnew,MYSQLI_ASSOC);
}

if(isset($_POST['submit'])){
  $search = $_POST['search'];

  header("Location:browse.php?search=$search");

}

if (isset($_SESSION["log_username"])) {

  $username = $_SESSION['log_username'];

  $user_id = "SELECT * from user WHERE username='$username'";
  $result = mysqli_query($conn, $user_id);
  $user = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // print_r($user);

  foreach($user as $user){
         $id = htmlspecialchars($user['user_id']);
         $pname = htmlspecialchars($user['profile_name']);
         $ppic = htmlspecialchars($user['img_path']);

      }


  $ses_sql = mysqli_query($conn,"select username from user where username = '$username' ");



  $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

  $login_session = $row['username'];}

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
    <Style>
    .row.hoverable:hover {
        background-color: #757575  ;
      }

    </Style>


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

  <div class="container">
    <div class="row">
      <form action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
      <div class="col l2 right">
        <input class="btn-large btn-hover indigo darken-2"type="submit" name="submit">
      </div>
      <div class="col s6 l3 right">
        <div class="input-field transparent">
          <input type="text" name="search" id="search">
          <label for="search" class="transparent">Search</label>
        </div>
        </form>
      </div>
    </div>
  </div>

  <center>

      <div class="container indigo darken-3 z-depth-4" style="height:auto;max-height:auto;">
        <div class="section"><p class="white-text"><?php echo $output ?></p></div>
          <?php foreach ($new as $new ){?>
          <a class="hoverable"href="productdetail.php?productid=<?php echo htmlspecialchars($new['product_id']) ?>">
            <div class="row hoverable">
              <div class="col s12 md4 l6 ">
              <img class="hoverable left"src="<?php echo htmlspecialchars($new['img_path1']) ?>" alt="" height="250" width="400">
              </div>
              <div class="col s12 md4 l4 ">
                <?php
                 $productname =  htmlspecialchars($new['product_name']);
                 $newproductname = str_replace("~","'","$productname");?>
              <h5 class="white-text truncate center"><?php echo $newproductname ?></h5>
              <br>
              <h5 class="white-text truncate"><?php echo htmlspecialchars($new['date_created']) ?></h5>
              </div>
              <div class="col s12 md4 l2">
              <h5 class="white-text truncate">$<?php echo htmlspecialchars($new['price']) ?></h5>
              </div>
          </div>
        </a>
        <?php  } ?>
        <div class="section"></div>
        </div>




  <div class="section"></div>
  <div class="section"></div>

</center>




  <footer><?php include ("footer.php"); ?></footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
      $(".sidenav").sidenav();
      $(".parallax").parallax();
      $('.slider').slider();

    })
    </script>

  </body>
</html>
