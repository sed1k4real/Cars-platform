<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------links------>
    <link rel="stylesheet" href="../css/insrt.css">
    <title>Add vehicules</title>
</head>
<body>
        <center>
            <div class="main">
                <form action = "insert.php" method="POST" enctype="multipart/form-data">

                    <h2>Add vehicule</h2>
                    <label for="id">ID: </label>
                    <input type="number" name="id" placeholder="ID"><br><br>
                    <label for="price">Price: </label>
                    <input type="number" name="price" placeholder="Price"><br><br>
                    <label for="name">Name: </label>
                    <input type="text" name="name" placeholder="Name"><br><br>
                    <label for="class">Class: </label>
                    <input type="text" name="class" placeholder="s, a, b, van, ..c&c"><br><br>
                    <label for="engine">Engine: </label>
                    <input type="text" name="engine" placeholder="Engine"><br><br>
                    <label for="drive">Drive: </label>
                    <input type="text" name="drive" placeholder="rear or back wheel"><br><br>
                    <label for="seat">seats: </label>
                    <input type="number" name="seat" placeholder="0-50"><br><br>
                    <label for="speed">Speed: </label>
                    <input type="number" name="speed" placeholder="Speed"><br><br>
                    <label for="accel">Acceleration: </label>
                    <input type="number" name="accel" placeholder="Acceleration"><br><br>
                    <label for="context">Context: </label>
                    <textarea type="text" name="context" placeholder="Context"></textarea><br><br>

                    <input type="file" name="image">

                    <label for="file">Choose a picture</label>

                    <button name='upload'>Upload</button>
                    <br><br>
                    <a href="../vehicules.php">View all</a>
                </form>
            </div>
        </center>
</body>
</html>