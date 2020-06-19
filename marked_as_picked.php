<?php
include'connection.php';
if(isset($_GET['row_id'])){
    $row_id=$_GET['row_id'];

$query=mysqli_query($conn,"update donation_quantity set flag='1' where Id='$row_id'") or die(mysqli_error($conn));
if($query){
    header("location: volunteer_pickup_list.php");
}
}
?>