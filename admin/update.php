<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------links------>
    <link rel="stylesheet" href="../css/admin/update.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
    <title>Update vehicles</title>
</head>
<body>

    <?php
        include 'admin_navbar.php'; 
        include ('../config.php');

        $matr = $_GET['id'];
        $update = mysqli_query($con, "SELECT * FROM $tbl_name WHERE matr = $matr");
        $data = mysqli_fetch_array($update);
    ?>

    <div class="main">
        <form action = "up.php" method="POST" enctype="multipart/form-data" >        
            <h2>Update vehicles</h2>
            <div class="container_form">

                        <div class="cell">
                            <label for="matr">Matr *</label><br>
                            <input type="number" name="matr" placeholder="Matricule" value='<?php echo $data['matr']?>' required><br>
                        </div>

                        <div class="cell">
                            <label for="id">ID *</label><br>
                            <input type="number" name="id" placeholder="ID" value='<?php echo $data['id']?>' required><br>
                        </div>

                        <div class="cell">
                            <label for="price">Price *</label><br>
                            <input type="number" name="price" placeholder="Price" value='<?php echo $data['price']?>' required><br>
                        </div>

                        <div class="cell">
                            <label for="name">Name *</label><br>
                            <input type="text" name="name" placeholder="Name" value='<?php echo $data['name']?>' required><br>
                        </div>

                        <div class="cell">
                            <label for="class">Class *</label><br>
                            <select type="text" name="class" required>
                                <option value='<?php echo $data['class']?>' disabled selected><?php echo $data['class']?></option>
                                <option value="s">Class S</option>
                                <option value="a">Class A</option>
                                <option value="b">Class B</option>
                                <option value="truck">Truck</option>
                                <option value="van">Van</option>
                                <option value="motorcycle">Motorcycle</option>
                            </select><br>
                        </div>

                        <div class="cell">
                            <label for="engine">Engine *</label><br>
                            <input type="text" name="engine" placeholder="Engine" value='<?php echo $data['engine']?>' required><br>
                        </div>

                        <div class="cell">
                            <label for="drive">Drive *</label><br>
                            <input type="text" name="drive" placeholder="rear or back wheel" value='<?php echo $data['drive']?>' required><br>
                        </div>

                        <div class="cell">
                            <label for="seat">Seats *</label><br>
                            <input type="number" name="seat" placeholder="0-50" value='<?php echo $data['seat']?>' required><br>
                        </div>

                        <div class="cell">
                            <label for="speed">Speed *</label><br>
                            <input type="number" name="speed" placeholder="Speed" value='<?php echo $data['speed']?>' required><br>
                        </div>

                        <div class="cell">
                            <label for="accel">Acceleration *</label><br>
                            <input type="number" name="accel" placeholder="Acceleration" value='<?php echo $data['accel']?>' required><br>
                        </div>

                        <div class="cell">
                            <label for="context">Context *</label><br>
                            <textarea type="text" name="context" placeholder="Context" required><?php echo $data['context']?></textarea><br>
                        </div>
            </div>

            <div id="file-up">
                <label for="file">Update the picture *</label><br>
                <input id="input_tag" type="file" name="image"><br>
            </div>

            <button name='update' type="submit" >Update</button><br>
            
            <center><a class="redirect" href="../vehicles.php">View all</a></center>
        </form>
    </div>
</body>
</html>