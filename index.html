<?php
session_start();
include('config/db_connect.php');
$sqlnew="SELECT * FROM `product` WHERE approval=1 ORDER BY `product`.`date_created` DESC LIMIT 6";
$resultnew= mysqli_query($conn,$sqlnew);
$new = mysqli_fetch_all($resultnew,MYSQLI_ASSOC);


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

  $output= "";
  if(isset($_POST['submit'])){
    $search = $_POST['search'];

    header("Location:browse.php?search=$search");

  }

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
      <style>
        nav{
          height: 75px;
          line-height: 75px;
        }
        .manlycontainer{
          width: 30px;
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

         .bordertext{
           color: white;text-shadow:-0.5px -0.5px 0 #000,0.5px -0.5px 0 #000,-0.5px 0.5px 0 #000,0.5px 0.5px 0 #000;
         }

         * {box-sizing:border-box}

         /* Slideshow container */
         .slideshow-container {
           max-width: 1000px;
           position: relative;
           margin: auto;
         }

         /* Next & previous buttons */
         .prev, .next {
           cursor: pointer;
           position: absolute;
           top: 50%;
           width: auto;
           margin-top: -22px;
           padding: 16px;
           color: white;
           font-weight: bold;
           font-size: 18px;
           transition: 0.6s ease;
           border-radius: 0 3px 3px 0;
           user-select: none;
         }

         /* Position the "next button" to the right */
         .next {
           right: 0;
           border-radius: 3px 0 0 3px;
         }

         /* On hover, add a black background color with a little bit see-through */
         .prev:hover, .next:hover {
           background-color: rgba(0,0,0,0.8);
         }

         /* Caption text */
         .text {
           color: #f2f2f2;
           font-size: 15px;
           padding: 8px 12px;
           position: absolute;
           bottom: 8px;
           width: 100%;
           text-align: center;
         }

         /* Number text (1/3 etc) */
         .numbertext {
           color: #f2f2f2;
           font-size: 12px;
           padding: 8px 12px;
           position: absolute;
           top: 0;
         }

         /* The dots/bullets/indicators */
         .dot {
           cursor: pointer;
           height: 15px;
           width: 15px;
           margin: 0 2px;
           background-color: #bbb;
           border-radius: 50%;
           display: inline-block;
           transition: background-color 0.6s ease;
         }

         .active, .dot:hover {
           background-color: #717171;
         }

         /* Fading animation */
         .fade {
           -webkit-animation-name: fade;
           -webkit-animation-duration: 1.5s;
           animation-name: fade;
           animation-duration: 1.5s;
         }

         @-webkit-keyframes fade {
           from {opacity: .4}
           to {opacity: 1}
         }

         @keyframes fade {
           from {opacity: .4}
           to {opacity: 1}
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


    <section>
      <div class="container right">
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
      <div class="container" style=" height: 550px;">
        <div class="section"><h5 class="white-text">Featured & Recommanded</h5></div>
  <div class="slider">
    <ul class="slides">
      <li>
        <a href="productdetail.php?productid=34">
        <img src="featureimg/featureff13.jpg">
        <div class="caption center-align">
          <h3 class="white-text bordertext" style="position:relative; top:100px;">Save the World</h3>
          <h5 class="light white-text bordertext" style="position:relative; top:100px;">Protect Your Loved Ones from the False God.</h5>
        </div>
        </a>
      </li>

      <li>
        <a href="productdetail.php?productid=26">
        <img src="featureimg/featuredeathstranding.jpg">
        <div class="caption left-align">
          <h3>Rejoin Life And Death</h3>
          <h5 class="light white-text">Embark a Journey to Reconnect The World</h5>
        </div>
        </a>
      </li>

      <li>
        <a href="productdetail.php?productid=30">
        <img src="featureimg/featureshenmue3.png">
        <div class="caption right-align">
          <h3>Passions Unwaver, Time Continues</h3>
          <h5 class="light white-text bordertext">A moment in motion, a story renewed</h5>
        </div>
      </a>
      </li>

      <li>
        <a href="productdetail.php?productid=29">
        <img src="featureimg/featuremonsterhunter.jpg">
        <div class="caption left-align">
          <h3>Explore the New World</h3>
          <h5 class="light grey-text text-lighten-3">Discover endless surprises and excitement</h5>
        </div>
      </a>
      </li>

    </ul>
  </div>

      </div>
      <div class="parallax-container" style="height:220px;">
        <div class="parallax">
          <img src="img/galaxy1.jpg" alt="" class="responsive-img">
        </div>
      </div>
      <div class="section container"><h4 class="white-text"> New Releases: </h4></div>


      <div class="container manlycontainer indigo darken-3 z-depth-4" style="height:620px;max-height:auto;width:auto;max-width:1300px;">
        <div class="row">
          <?php foreach ($new as $new ){?>

          <div class="col s12 l4">
            <a href="productdetail.php?productid=<?php echo htmlspecialchars($new['product_id']) ?>">
              <img class="hoverable"src="<?php echo htmlspecialchars($new['img_path1']) ?>" alt="" height="250" width="400" style="position:relative;top:10px;">
              <?php
               $productname =  htmlspecialchars($new['product_name']);
               $newproductname = str_replace("~","'","$productname");?>
              <p class="white-text truncate"><?php  echo $newproductname ?>($<?php  echo htmlspecialchars($new['price']) ?>)</p>

            </a>
          </div>

        <?php  } ?>
          </div>
        </div>



    <div class="section"></div>
      <div class="parallax-container" style="height:200px;">
        <div class="parallax">
          <img src="img/street.jpg" alt="" class="responsive-img">
        </div>
      </div>
      <div class="section container"><h4 class="white-text">  News & Trailers: </h4></div>

            <div class="slideshow-container container indigo darken-3 z-depth-4" style="height: 360px; max-height:auto;">

              <div class="mySlides fade"style="visibility:visible;position:relative;top:20px;">
                <div class="row">
                  <div class="col s12 l7">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/xeME6jLvMOc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col s12 l5">
                    <h5 class="white-text">Shenmue 3</h5>
                    <p class="white-text">Available on November 19th!</p>
                    <p class="white-text">Journey deep into rural China as you take on the role of Ryo Hazuki, a Japanese teenager hellbent on finding his father’s killer—a story of adventure, mystery, friendship, martial arts, and ultimately, revenge!</p>
                  </div>
                </div>
               </div>

              <div class="mySlides fade"style="position:relative;top:20px;">
                <div class="row">
                  <div class="col s12 l7">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/03l5L5LruHs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col s12 l5">
                    <h5 class='white-text'>Star Wars Jedi: Fallen Order</h5>
                    <p class="white-text">In the Galactic Empire, the Inquisitorius has only one mission: seek out and destroy all remnants of the Jedi Order. </p>
                    <p class="white-text">Learn more about what Cal Kestis is searching the galaxy for and why the Empire will stop at nothing to bring him down in Star Wars Jedi: Fallen Order.</p>
                  </div>
                </div>
              </div>

              <div class="mySlides fade"style="position:relative;top:20px;">
                <div class="row">
                  <div class="col s12 l7">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Z8_JEaoYcOs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col s12 l5">
                    <h5 class="white-text">Cyberpunk 2077</h5>
                    <p class="white-text">Cyberpunk 2077 is an upcoming role-playing video game developed by CD Projekt Red, an internal studio of publisher CD Projekt, that is releasing for Google Stadia, Microsoft Windows, PlayStation 4, and Xbox One on 16 April 2020.</p>

                  </div>
                </div>
               </div>

              <div class="mySlides fade"style="position:relative;top:20px;">
                <div class="row">
                  <div class="col s12 l7">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FIeIT9twz-c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                  <div class="col s12 l5">
                    <h5 class="white-text">“DRAGALIA LOST Celebration Party”</h5>
                    <p class="white-text">The song a n n i v e r s a r y, written by DAOKO and TAKU INOUE for the one-year anniversary of Dragalia Lost, was used in a new commercial for the celebrations. An anniversary event titled “DRAGALIA LOST Celebration Party” will also be held at Shinkiba STUDIO COAST on January 8 next year where DAOKO will perform live alongside TAKU INOUE as the DJ.</p>

                  </div>
                </div>
              </div>
              <!-- Next and previous buttons -->
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <div class="hide-on-small-only" style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span>
              <span class="dot" onclick="currentSlide(2)"></span>
              <span class="dot" onclick="currentSlide(3)"></span>
              <span class="dot" onclick="currentSlide(4)"></span>
            </div>
          <div class="section"></div>
          <div class="section"></div>

        <div class="container center">
          <a href="browse.php" class="btn-large hoverable indigo darken-4 pulse">Want to Browse?</a>
        </div>

    </section>

    <footer><?php include ("footer.php"); ?></footer>


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
    <script>
      var slideIndex = 1;
      showSlides(slideIndex);

      // Next/previous controls
      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      // Thumbnail image controls
      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
      }
    </script>

  </body>
</html>
