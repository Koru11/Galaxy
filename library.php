<?php
include("config/session.php");

//check developer in the database
   $own_check = "SELECT sales.product_id,product.product_name,product.developer,sales.sales_id,sales.date_created,product.file_name FROM product,sales,user
   WHERE product.product_id=sales.product_id AND sales.user_id=user.user_id AND sales.user_id=$id ORDER by sales.date_created DESC";
   $res_n = mysqli_query($conn, $own_check);
   $approved = mysqli_fetch_all($res_n, MYSQLI_ASSOC);

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
  <script>
  function Deleteqry(id)
    {
    if(confirm("Are you sure you want to delete this row?")==true)
             window.location="devmanagement.php?del="+id;
      return false;
    }

  </script>
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

        <div class="container" style="width:1500px;min-height:700px;">
            <ul class="collection with-header">
                <li class="collection-header indigo lighten-1"><a href="devregister.php" class="white-text"><h4>Owned Products</h4></a></li>
                <li class="collection-item">
                  <div class="row">
                        <div class="col s2">Product ID</div>
                        <div class="col s3">Product Name</div>
                        <div class="col s2">Developer</div>
                        <div class="col s2">Sales ID</div>
                        <div class="col s2">Date</div>
                        <div class="col s1">Action</div>




                  </div>
                  <?php foreach ($approved as $approved) {?>
                      <div class="row" >
                            <div class="col s2"><?php echo htmlspecialchars($approved['product_id']); ?></div>
                            <div class="col s3"><?php echo htmlspecialchars($approved['product_name']); ?></div>
                            <div class="col s2"><?php echo htmlspecialchars($approved['developer']); ?></div>
                            <div class="col s2"><?php echo htmlspecialchars($approved['sales_id']); ?></div>
                            <div class="col s2"><?php echo htmlspecialchars($approved['date_created']); ?></div>
                            <div class="col s1">
                              <?php $filename=htmlspecialchars($approved['file_name']); ?>
                              <a href="6download.php?file=<?php echo $filename ?>">Download</a>
                            </div>

                            </div>
                  <?php  }?>
              </li>

              </ul>
        </div>

<div class="container">


</div>


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
