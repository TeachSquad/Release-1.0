<?php

$uri = $_SERVER['REQUEST_URI'];
$split_url = explode("=", $uri);
$id = str_replace("%20", " ", $split_url[1]);
$ngoId = str_replace("%20", " ", $split_url[3]);
//echo $id;
//echo $ngoId;


include'connection.php';
$query=mysqli_query($conn,"delete FROM post_donation where id='$id'") or die(mysqli_error($conn));
if($query){
    header("location: delete_posted_donation.php?$ngoId");
}

?>