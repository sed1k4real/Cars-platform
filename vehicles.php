<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="./dist/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
    <title>Vehicles</title>
</head>

<body>
    <?php include 'navbar.php'; ?>
    
    <div class="vehicles">
        <div class="vehicles__container">
            <h2 class="vehicles__title">Vehicles</h2>
            <section>
                <?php
                    include('config/config.php');
                    $result = mysqli_query($con, "SELECT * FROM vehicules");
                    while($row = mysqli_fetch_array($result)){
                        echo"    
                    <div class='card'>
                        <img src='$row[img]' class='card__image' alt='...'>
                        <div class='card__body' role='button'>
                            <h2 class='card__body__title'>$row[name]</h2>
                            <p class='Card__body__price'>$row[price]$</p> 
                        </div>
                    </div>
                    ";
                    }
                ?>
            </section>
        </div>
    </div>
</body>

</html>