<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- script -->
    <script src="../js/script.js" type="module"></script>
    <!------links------>
    <link rel="stylesheet" href="../dist/css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
    <title>Add vehicles</title>
</head>
<body>
    <?php include 'admin_navbar.php'; 
    include('../config/config.php');
    require('./config/functions.php');

    if(isset($_POST['upload']))
    {
        $ID = $_POST['id'];
        $NAME = $_POST['name'];
        $PRICE = $_POST['price'];
        $ENGINE = $_POST['engine'];
        $DRIVE = $_POST['drive'];
        $SEAT = $_POST['seat'];
        $SPEED = $_POST['speed'];
        $ACCEL = $_POST['accel'];
        $CONTEXT = $_POST['context'];

        if(!empty($_POST['class'])) {
            $CLASS= $_POST['class'];
        }

        // Upload and transmit the images to the following folder
        $IMAGE = $_FILES['image'];
        $image_location = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];

        // Storing path of the uploaded images
        if(!empty($_FILES['image']['name']))
        {
            $image_up = "images/".$image_name;
            // Check if the image is on the correct path 
            if(move_uploaded_file($image_location, '../images/'.$image_name))
            { $error = 0; }
            else
            { $error = 1; }
        }
        // Insert data to the DB table parameter 
        $insert = "INSERT INTO vehicules(id, name, class, img, price, engine, drive, seat, speed, accel, context) VALUES('$ID', '$NAME', '$CLASS', '$image_up', '$PRICE', '$ENGINE', '$DRIVE', '$SEAT', '$SPEED', '$ACCEL', '$CONTEXT')";
        mysqli_query($con, $insert);

        if($insert && $error == 0)
        {
            echo "<script LANGUAGE='JavaScript'>
            let notif = ['Added successfully', 'success'];
            </script>";
        }
        else
        {
            echo "<script LANGUAGE='JavaScript'>
            let notif = ['Failed to add', 'error'];
            </script>";
        }

        echo "<script LANGUAGE = 'JavaScript'>
        sessionStorage.setItem('notification', JSON.stringify(notif));
        // window.location.href='./content_edit.php';
        </script>";

        mysqli_close($con);
    }
    ?>

    <form action = "" method="POST" enctype="multipart/form-data">           
        <h2>Add vehicles</h2>
        <div class="form__container">
            <div class="cell">
                <label for="id">ID</label><br>
                <input class="input" type="number" name="id" placeholder="ID" required><br>
            </div>

            <div class="cell">
                <label for="price">Price</label><br>
                <input class="input" type="number" name="price" placeholder="Price" required><br>
            </div>

            <div class="cell">
                <label for="name">Name</label><br>
                <input class="input" type="text" name="name" placeholder="Name" required><br>
            </div>

            <div class="cell">
                <label for="class">Class</label><br>
                <select class="input" type="text" name="class" required>
                    <option value="" disabled selected>Choose option</option>
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
                <input class="input" type="text" name="engine" placeholder="Engine" required><br>
            </div>

            <div class="cell">
                <label for="drive">Drive</label><br>
                <input class="input" type="text" name="drive" placeholder="rear or back wheel" required><br>
            </div>

            <div class="cell">
                <label for="seat">Seats</label><br>
                <input class="input" type="number" name="seat" placeholder="0-50" required><br>
            </div>

            <div class="cell">
                <label for="speed">Speed</label><br>
                <input class="input" type="number" name="speed" placeholder="Speed" required><br>
            </div>

            <div class="cell">
                <label for="accel">Acceleration</label><br>
                <input class="input" type="number" name="accel" placeholder="Acceleration" required><br>
            </div>

            <div class="cell">
                <label for="context">Context</label><br>
                <textarea class="input" type="text" name="context" placeholder="Context" required></textarea><br>
            </div>
        </div>
        <div id="file-up">
            <label for="file">Choose a picture</label><br>
            <input id="input_tag" type="file" name="image"><br>
        </div>
        <button name='upload'>Upload</button><br> 
        <center><a class="redirect" href="../vehicles.php">View all</a></center>
    </form>

</body>
</html>