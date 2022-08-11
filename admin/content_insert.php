<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------links------>
    <link rel="stylesheet" href="../dist/css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
    <title>Add vehicles</title>
</head>
<body>
    <?php include 'admin_navbar.php'; ?>

    <form action = "config/insert.php" method="POST" enctype="multipart/form-data">           
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