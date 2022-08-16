<?php
include('../../config/config.php');

$mtr = $_GET['id'];
$del_query = "DELETE FROM $tbl_name WHERE matr = $mtr";

    if(mysqli_query($con, $del_query))
    {
        echo "<script LANGUAGE='JavaScript'>
        let notif = ['Deleted successfully', 'success'];
        sessionStorage.setItem('notification', JSON.stringify(notif));
        window.location.href='../content_edit.php';
        </script>";
        
    }
    else
    {
        echo "<script LANGUAGE='JavaScript'>
        let notif = ['Failed to delete', 'error'];
        sessionStorage.setItem('notification', JSON.stringify(notif));
        window.location.href='../content_edit.php';
        </script>";
    }
    mysqli_close($con);
?>