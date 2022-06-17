<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------links------>
    <link rel="stylesheet" href="../css/content_insrt.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
    <title>Add vehicles</title>
</head>
<body>
    <div class="main">
        <form action = "insert.php" method="POST" enctype="multipart/form-data">
            <h2>Add vehicles</h2>

            <div class="container_form">
                        <div class="cell">
                            <label for="id">ID *</label><br>
                            <input type="number" name="id" placeholder="ID"><br>
                        </div>

                        <div class="cell">
                            <label for="price">Price *</label><br>
                            <input type="number" name="price" placeholder="Price"><br>
                        </div>

                        <div class="cell">
                            <label for="name">Name *</label><br>
                            <input type="text" name="name" placeholder="Name"><br>
                        </div>

                        <div class="cell">
                            <label for="class">Class *</label><br>
                            <select type="text" name="class">
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
                            <label for="engine">Engine *</label><br>
                            <input type="text" name="engine" placeholder="Engine"><br>
                        </div>

                        <div class="cell">
                            <label for="drive">Drive *</label><br>
                            <input type="text" name="drive" placeholder="rear or back wheel"><br>
                        </div>

                        <div class="cell">
                            <label for="seat">Seats *</label><br>
                            <input type="number" name="seat" placeholder="0-50"><br>
                        </div>

                        <div class="cell">
                            <label for="speed">Speed *</label><br>
                            <input type="number" name="speed" placeholder="Speed"><br>
                        </div>

                        <div class="cell">
                            <label for="accel">Acceleration *</label><br>
                            <input type="number" name="accel" placeholder="Acceleration"><br>
                        </div>

                        <div class="cell">
                            <label for="context">Context *</label><br>
                            <textarea type="text" name="context" placeholder="Context"></textarea><br>
                        </div>
            </div>

            <div id="file-up">
                <label for="file">Choose a picture *</label><br>
                <input id="input_tag" type="file" name="image"><br>
            </div>

            <button name='upload'>Upload</button><br>

            <center><a class="redirect" href="../vehicles.php">View all</a></center>
        </form>
    </div>
</body>
</html>