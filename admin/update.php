<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------links------>
    <link rel="stylesheet" href="../styles/admin/update.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
    <title>Update vehicles</title>
</head>
<body>

    <?php
        include 'admin_navbar.php'; 
        include ('../config/config.php');

        // fetch data from DB to rows
        $MATR = $_GET['id'];
        $query_fetch = mysqli_query($con, "SELECT * FROM $tbl_name WHERE MATR = $MATR");
        $data = mysqli_fetch_array($query_fetch);

        if(isset($_POST['update']))
        {
            $ID = $_POST['id'];
            $NAME = $_POST['name'];
            $MATR = $_POST['matr'];
            $PRICE = $_POST['price'];
            $ENGINE = $_POST['engine'];
            $DRIVE = $_POST['drive'];
            $SEAT = $_POST['seat'];
            $SPEED = $_POST['speed'];
            $ACCEL = $_POST['accel'];
            $CONTEXT = $_POST['context'];

            // check if class is empty
            if(!empty($_POST['class'])) {
                $CLASS= $_POST['class'];
            }
            
            // Upload and transmit the images to the following folder
            $image_name = $_FILES['image']['name'];
            $image_location = $_FILES['image']['tmp_name'];

            if(!empty($_FILES['image']['name']))
            {
                $image_up = "images/".$image_name;

                // move uploaded file ( $file_path, $destination)
                if(move_uploaded_file($image_location, '../images/'.$image_name))
                { $error = 0; }
                else
                { $error = 1; }
            }
            else
            { 
                $image_up = $data['img']; 
                $error = 0;
            }
            // echo ($error == 0) ? '0 error' : 'Error'; 

            // Update data
            $update = "UPDATE $tbl_name SET id='$ID', name='$NAME', class='$CLASS', img='$image_up', price='$PRICE', engine='$ENGINE', drive='$DRIVE', seat='$SEAT', speed='$SPEED', accel='$ACCEL', context='$CONTEXT' WHERE matr = $MATR";
            mysqli_query($con, $update);

            // Check if the image is on the correct path 
            if($update && ($error == 0))
            {
                echo "<script LANGUAGE='JavaScript'>
                let notif = 'new toast({text: `Updated successfully` ,status: `success`})';
                sessionStorage.setItem('notification', notif);
                window.location.href='./content_edit.php?notif';
                </script>";
            }
            else
            {
                echo "<script LANGUAGE='JavaScript' type='text/javascript'>
                let notif = 'new toast({text: `Failed to update` ,status: `failed`})';
                sessionStorage.setItem('notification', notif);
                window.location.href='./content_edit.php';
                </script>";
            }
            mysqli_close($con);
        }
    ?>

    <div class="main">
        <form action = "" method="POST" enctype="multipart/form-data" >        
            <h2>Update vehicles</h2>
            <div class="form">
                <div class="form__container">
                        <div class="cell__hidden">
                            <label for="matr">Matr</label><br>
                            <input class="input" type="number" name="matr" placeholder="Matricule" value='<?php echo $data['matr']?>' required><br>
                        </div>
                        <div class="cell">
                            <label for="id">ID</label><br>
                            <input class="input" type="number" name="id" placeholder="ID" value='<?php echo $data['id']?>' required><br>
                        </div>
                        <div class="cell">
                            <label for="price">Price</label><br>
                            <input class="input" type="number" name="price" placeholder="Price" value='<?php echo $data['price']?>' required><br>
                        </div>
                        <div class="cell">
                            <label for="name">Name</label><br>
                            <input class="input" type="text" name="name" placeholder="Name" value='<?php echo $data['name']?>' required><br>
                        </div>
                        <div class="cell">
                            <label for="class">Class</label><br>
                            <select class="input" type="text" name="class" title="Class" required>
                                <option value="<?php echo $data['class']?>" selected>
                                    <?php
                                        $value = $data['class'];
                                        echo ($value == 's' || $value == 'a' || $value == 'b') ? 'Class '.ucfirst($value) : ucfirst($value)
                                    ?>
                                </option>
                                <option value="s">Class S</option>
                                <option value="a">Class A</option>
                                <option value="b">Class B</option>
                                <option value="truck">Truck</option>
                                <option value="van">Van</option>
                                <option value="motorcycle">Motorcycle</option>
                            </select><br>
                        </div>
                        <div class="cell">
                            <label for="engine">Engine</label><br>
                            <input class="input" type="text" name="engine" placeholder="Engine" value='<?php echo $data['engine']?>' required><br>
                        </div>
                        <div class="cell">
                            <label for="drive">Drive</label><br>
                            <input class="input" type="text" name="drive" placeholder="rear or back wheel" value='<?php echo $data['drive']?>' required><br>
                        </div>
                        <div class="cell">
                            <label for="seat">Seats</label><br>
                            <input class="input" type="number" name="seat" placeholder="0-50" value='<?php echo $data['seat']?>' required><br>
                        </div>
                        <div class="cell">
                            <label for="speed">Speed</label><br>
                            <input class="input" type="number" name="speed" placeholder="Speed" value='<?php echo $data['speed']?>' required><br>
                        </div>
                        <div class="cell">
                            <label for="accel">Acceleration</label><br>
                            <input class="input" type="number" name="accel" placeholder="Acceleration" value='<?php echo $data['accel']?>' required><br>
                        </div>
                        <div class="cell">
                            <label for="context">Contex*</label><br>
                            <textarea class="input" type="text" name="context" placeholder="Context" required><?php echo $data['context']?></textarea><br>
                        </div>
                    </div>
            </div>
            <div id="file-up">
                <label for="file">Update the picture</label><br>
                <input id="input_tag" type="file" name="image"><br>
            </div>
            <button name='update' type="submit">Update</button><br>
            <center><a class="redirect" href="../vehicles.php">View all</a></center>
        </form>
    </div>
</body>
</html>