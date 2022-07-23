<?php
    include('../../config/config.php');

    if(isset($_POST['upload']))
    {
        $ID = $_POST['id'];
        $NAME = $_POST['name'];
        //$CLASS = $_POST['class'];

        if(!empty($_POST['class'])) {
            $CLASS= $_POST['class'];
        }

        // Upload and transmit the images to the following folder
        $IMAGE = $_FILES['image'];

        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];

        // Storing path of the uploaded images
        $image_up = "images/".$image_name;
        
        $PRICE = $_POST['price'];
        $ENGINE = $_POST['engine'];
        $DRIVE = $_POST['drive'];
        $SEAT = $_POST['seat'];
        $SPEED = $_POST['speed'];
        $ACCEL = $_POST['accel'];
        $CONTEXT = $_POST['context'];

        // Insert data to the DB table parameter 
        $insert = "INSERT INTO vehicules(id, name, class, img, price, engine, drive, seat, speed, accel, context) VALUES('$ID', '$NAME', '$CLASS', '$image_up', '$PRICE', '$ENGINE', '$DRIVE', '$SEAT', '$SPEED', '$ACCEL', '$CONTEXT')";
        mysqli_query($con, $insert);

        // Check if the image is on the correct path 
        if(move_uploaded_file($image_location, '../../images/'.$image_name))
        {
            echo "<script LANGUAGE='JavaScript'>
            window.location.href='../content_insert.php';
            alert('Added succesfully');
            </script>";
        }
        else
        {
            echo "<script LANGUAGE='JavaScript'>
            window.alert('Failed to add');
            </script>";
            //window.location.href='../content_insert.php';
        }
        mysqli_close($con);
    }
?>