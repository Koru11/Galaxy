<?php
session_start();
include('config/db_connect.php');
$getproduct= $_GET['productid'];

$id='';

$productsql = "SELECT * from product WHERE product_id='$getproduct'";
$result = mysqli_query($conn, $productsql);
$product = mysqli_fetch_all($result, MYSQLI_ASSOC);

// print_r($user);

foreach($product as $product){
       $productid = htmlspecialchars($product['product_id']);
       $productname = htmlspecialchars($product['product_name']);
       $dev_team_id = htmlspecialchars($product['dev_team_id']);
       $description = htmlspecialchars($product['description']);
       $developer = htmlspecialchars($product['developer']);
       $publisher = htmlspecialchars($product['publisher']);
       $img_path1 = htmlspecialchars($product['img_path1']);
       $img_path2 = htmlspecialchars($product['img_path2']);
       $img_path3 = htmlspecialchars($product['img_path3']);
       $img_path4 = htmlspecialchars($product['img_path4']);
       $date_created = htmlspecialchars($product['date_created']);
       $approval = htmlspecialchars($product['approval']);
       $price = htmlspecialchars($product['price']);

    }
if ($approval == 0) {
echo "Product not approved by admins";
header("Refresh:1; url=galaxy.php");
}

  $dev_team = "SELECT * from dev_team WHERE dev_team_id='$dev_team_id'";
  $resultdt = mysqli_query($conn, $dev_team);
  $devteam = mysqli_fetch_all($resultdt, MYSQLI_ASSOC);
        // print_r($user);
  foreach($devteam as $devteam){
        $dev_team_name = htmlspecialchars($devteam['dev_team']);

              }

  $spec = "SELECT * from product_spec WHERE product_id='$productid'";
  $resultsp = mysqli_query($conn, $spec);
  $pspec = mysqli_fetch_all($resultsp, MYSQLI_ASSOC);
        // print_r($user);
  foreach($pspec as $pspec){
        $os = htmlspecialchars($pspec['os']);
        $processor = htmlspecialchars($pspec['processor']);
        $memory = htmlspecialchars($pspec['memory']);
        $graphics = htmlspecialchars($pspec['graphics']);
        $directx = htmlspecialchars($pspec['directx']);
        $network = htmlspecialchars($pspec['network']);
        $storage= htmlspecialchars($pspec['storage']);
        $soundcard = htmlspecialchars($pspec['soundcard']);
        $additional = htmlspecialchars($pspec['additional']);

        $minos = htmlspecialchars($pspec['minos']);
        $minprocessor = htmlspecialchars($pspec['minprocessor']);
        $minmemory = htmlspecialchars($pspec['minmemory']);
        $mingraphics = htmlspecialchars($pspec['mingraphics']);
        $mindirectx = htmlspecialchars($pspec['mindirectx']);
        $minnetwork = htmlspecialchars($pspec['minnetwork']);
        $minstorage= htmlspecialchars($pspec['minstorage']);
        $minsoundcard = htmlspecialchars($pspec['minsoundcard']);
        $minadditional = htmlspecialchars($pspec['minadditional']);
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
  $login_session = $row['username'];

}

  $ownsql = "SELECT * from sales WHERE user_id='$id' AND product_id='$getproduct'";
  $resultown = mysqli_query($conn, $ownsql);
  $own = mysqli_fetch_all($resultown, MYSQLI_ASSOC);


        $_SESSION['productid'] = $productid;
 ?>
<!DOCTYPE html>
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
   nav{
        height: 75px;
        line-height: 75px;
      }
      .container{
        width: 5000px;
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
    <?php
      if(isset($_SESSION["log_username"])){
        $session = $_SESSION["log_username"];
        include("header2.php");
      }else{
        include("header.php");
      }
   ?>
 </header>
 <div class="section"></div>
 <div class="section"></div>

 <div class="container indigo darken-2 z-depth-4">
   <div class="row">
          <div ><?php include ('slide.php') ?></div>
  </div>
  <?php  $newproductname = str_replace("~","'","$productname");?>
    <div class="row">
      <div class="container white-text"><h3><?php echo $newproductname ?></h3></div>
    </div>
    <div class="row">
      <div class="container">
        <?php if(mysqli_num_rows($resultown)>0) {
          ?><a href="checkout.php?productid=<?php echo $productid ?>" class="col l2 btn-large hoverable disabled indigo darken-4">Owned</a><?php
        }else {
          ?><a href="checkout.php?productid=<?php echo $productid ?>" class="col l2 btn-large hoverable indigo darken-4">Buy Now</a><?php
        }?>
          <div class="col black center-align z-depth-1" style="width:100px; height:55px;"><h6 class="white-text"style="position:relative;top:10px;">$<?php echo $price ?></h6></div>
      </div>
    </div>
    <?php  $newdescription = str_replace("~","'","$description");?>

    <div class="row">
      <div class="container white-text"><p><h4>Description:</h4> <?php echo $newdescription ?></p></div>
    </div>

    <div class="row">
      <div class="container">
      <div class="col s12 l6 white-text">
        <p>Developer Team: <?php echo $dev_team_name ?></p>
        <p>Creator: <?php echo $developer ?></p>
        <p>Publisher: <?php echo $publisher ?></p>
        <p>Price: $<?php echo $price ?> </p>
        <p>Published Date: <?php echo $date_created ?></p>

      </div>
      </div>
    </div>
    <div class="row">
      <div class="container">
      <div class="col s12 l6 indigo z-depth-2 grey-text text-lighten-2">
            <p>Minimum System Requirement</p>
            <hr>
            <p>OS:<?php echo $os ?></p>
            <p>Processor:<?php echo $processor ?></p>
            <p>Graphics:<?php echo $graphics ?></p>
            <p>DirectX:<?php echo $directx ?></p>
            <p>Network:<?php echo $network ?></p>
            <p>Storage:<?php echo $storage ?></p>
            <p>Soundcard:<?php echo $soundcard ?></p>
            <p>Additional:<?php echo $additional ?></p>

      </div>
      </div>
    <div class="container">
      <div class="col s12 l6 indigo z-depth-2 grey-text text-lighten-2">
            <p>Recommended System Requirement</p>
            <hr>
            <p>OS:<?php echo $minos ?></p>
            <p>Processor:<?php echo $minprocessor ?></p>
            <p>Graphics:<?php echo $mingraphics ?></p>
            <p>DirectX:<?php echo $mindirectx ?></p>
            <p>Network:<?php echo $minnetwork ?></p>
            <p>Storage:<?php echo $minstorage ?></p>
            <p>Soundcard:<?php echo $minsoundcard ?></p>
            <p>Additional:<?php echo $minadditional ?></p>

      </div>
    </div>

    </div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>
    <div class="section"></div>

  </div>
</div>

<footer>
  <?php include('footer.php') ?>

</footer>
<br>


<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script>
$(document).ready(function(){
  $(".sidenav").sidenav();
  $(".parallax").parallax();
})
</script>

</body>
</html>
