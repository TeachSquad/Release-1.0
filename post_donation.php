
<?php
$uri = $_SERVER['REQUEST_URI'];
$split_url = explode("?", $uri);
$item_selected= str_replace("%27","",$split_url[1]);
$ngoId= trim($item_selected);
//echo $ngoId;
?>

<html>
<head>
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
<?php
include'connection.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Gedion 24/7</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <!-- <a class="nav-item nav-link active" href="ngo_data.php?ngoId">Ngo list <span class="sr-only">(current)</span></a> --> -->
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>
<div>
<body>
  <!-- <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5"> -->
    <!-- <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
        <div class="col-md-9 ftco-animate pb-5 text-center"> -->
          <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">


              <form action="post_donation_success.php" class="bg-light p-5 contact-form" id="donate" method="POST">

                <div class="form-group">
                  <input type="date" class="form-control" id="upto_date" name="upto_date" required>
                </div>

                <div class="form-group">	
                        <input type="text" name="ngoid" value="<?php echo $ngoId?>" hidden>
                    <div class="form-group"><br>
  
                  <div class="form-group">
                    <select class="form-control" id="item" name="item" required>
                    <option selected class="bg-light p-5 contact-form"><p>Add item list</p></option>
                      <?php
                      $query2 = mysqli_query($conn, "select * from item_needed where NgoId='$ngoId'") or die(mysqli_error($conn));
                      while ($row2 = mysqli_fetch_array($query2)) {
                      ?>
                        <option><?php echo $row2['item']; ?></option>
                      <?php
                      }
                      ?>
                  </div>



                <div class="form-group">
                  <input type="text" class="form-control" id="quantity" name="quantity" placeholder="quantity">
                </div>

                <div class="form-group">
                  <input type="submit" value="Post" class="btn btn-primary py-3 px-5">
                </div>
              </form>

            </div>

            <div class="col-md-6 d-flex">
              <div id="map" class="bg-white"></div>
            </div>
        </div>
      </div>
  </section>
  </div>
  <!-- </div>
  </div> -->
  </section>
  </form>
</body>



<script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


</html>