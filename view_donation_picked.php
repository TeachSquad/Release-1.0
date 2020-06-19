

<?php
$uri = $_SERVER['REQUEST_URI'];
$split_url = explode("?", $uri);
$item_selected= str_replace("%27","",$split_url[1]);
$ngoId= trim($item_selected);
?>


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
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>


<div>
<table class="table" id="dynamic_field" style="border-style:none;">
<thead>
    <tr>
        <th scope="col">Doner Name</th>
        <th scope="col">Email</th>
        <th scope="col">Contact number</th>
        <th scope="col">Pickup location</th>
        <th scope="col">Volunteer</th>
        <th scope="col">Address</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">Item</th>
        
    </tr>
</thead>
</div>




<?php

    $query=mysqli_query($conn,"select * from donation_quantity where ngo_id='$ngoId' and flag='1'") or die(mysqli_error($conn));
    while($row= mysqli_fetch_array($query)){
        //echo $row['quantity']."\n";
        $main_donation= $row['donation_Id']."\n";
        $query_mainDon=mysqli_query($conn,"select * from donation where donationId='$main_donation'") or die(mysqli_error($conn));
    while($row_Main= mysqli_fetch_array($query_mainDon)){
        //echo $row['quantity']."\n";
        //echo $row_Main['doner_name']."\n";
?>
<tr>
    <input type="text" name="row_id" value="<?php echo $row['Id'];?>" hidden/>
    <td><?php echo $row_Main['doner_name'];?></td>
    <td><?php echo $row_Main['email'];?></td>
    <td><?php echo $row_Main['contact_no'];?></td>
    <td><?php echo $row_Main['pickup_location'];?></td>
    <?php
    $loc=$row_Main['pickup_location'];
    $query_mainloc=mysqli_query($conn,"select * from volunteer where pickup_location='$loc' and registered_with_ngo='$ngoId'") or die(mysqli_error($conn));
    $row_Mainloc= mysqli_fetch_array($query_mainloc)
    ?>
    <td><?php echo $row_Mainloc['name'];?></td>
    <td><?php echo $row_Main['pickup_address'];?></td>
    <td><?php echo $row_Main['date_of_pickup'];?></td>
    <td><?php echo $row_Main['time_of_pickup'];?></td>
    <td><?php echo $row['item'];?></td>
    </form>
</tr>



<?php

    }

}

$query=mysqli_query($conn,"select * from donation_quantity where donation_Id=8 and ngo_id='4';") or die(mysqli_error($conn));
// while($row= mysqli_fetch_array($query)){
?>

</table>