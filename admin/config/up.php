<?php
    include('../../config/config.php');

    if(isset($_POST['update']))
    {
        $ID = $_POST['id'];
        $NAME = $_POST['name'];

        if(!empty($_POST['class'])) {
            $CLASS= $_POST['class'];
        }

        // Upload and transmit the images to the following folder
        $IMAGE = $_FILES['image'];

        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];

        // Storing path of the uploaded images
        $image_up = "images/".$image_name;
        
        $MATR = $_POST['matr'];
        $PRICE = $_POST['price'];
        $ENGINE = $_POST['engine'];
        $DRIVE = $_POST['drive'];
        $SEAT = $_POST['seat'];
        $SPEED = $_POST['speed'];
        $ACCEL = $_POST['accel'];
        $CONTEXT = $_POST['context'];

        // Update data to the DB table parameter 
        $update = "UPDATE $tbl_name SET id='$ID', name='$NAME', class='$CLASS', img='$image_up', price='$PRICE', engine='$ENGINE', drive='$DRIVE', seat='$SEAT', speed='$SPEED', accel='$ACCEL', context='$CONTEXT' WHERE matr = $MATR";
        mysqli_query($con, $update);

        // Check if the image is on the correct path 
        if(move_uploaded_file($image_location, '../../images/'.$image_name))
        {
            echo "<script LANGUAGE='JavaScript'>
            window.location.href='../content_edit.php';
            alert('Updated succesfully');
            </script>";
        }
        else
        {
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Failed to update');
            window.location.href='../content_edit.php';
            </script>";
        }
        mysqli_close($con);
    }
?>