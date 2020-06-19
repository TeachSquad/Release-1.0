<?php
    session_start();
    $op;
    $ngoId = $_POST["ngoid"];
    $item = $_POST["item"];
    $quantity = $_POST["quantity"];
    $upto_date = $_POST["upto_date"];



    echo $ngoId;
    echo $item;



    function ngo_registration($ngoId, $item, $quantity, $upto_date)
    {
        include 'connection.php';
        $sql = "insert into post_donation (Ngo_name,Item,Quantity,upto_date)
                values('$ngoId', '$item', '$quantity', '$upto_date')";
        if (mysqli_query($conn, $sql)) {
            //$_SESSION['ngoReg']="true";
            header("location: post_donation.php?$ngoId");
            $op=true;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $op=false;
        }
        return $op;
    }
    ngo_registration($ngoId, $item, $quantity, $upto_date);  




?>