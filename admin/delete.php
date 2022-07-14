<?php
include('../config.php');

$mtr = $_GET['id'];
$del_query = "DELETE FROM $tbl_name WHERE matr = $mtr";

    if(mysqli_query($con, $del_query))
    {
        header("location:content_edit.php");
        echo "Item deleted successfully";
    }
    else
    {
        header("location:content_edit.php");
        echo "Error deleting item";
    }
    mysqli_close($con);
?>