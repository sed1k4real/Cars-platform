<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-------script-------->
    <script src="../js/script.js" type="module"></script>
    <script defer>        
        function checker()
        {
            let result = confirm('Are u sure you want to delete this item?');
            if(result == false){event.preventDefault();}
            //toast("Are u sure you want to delete this item?")
        }
    </script>
    <!------links------>
    <link rel="stylesheet" href="../dist/css/admin.css">
    <title>Edit vehicles</title>
</head>
<body>

<?php include 'admin_navbar.php';?>
<div class="content">
    <div class="content__container">
            <h2 class="content__title">Edit vehicles</h2>
            <section class="content__page">
                    <?php
                        include('../config/config.php');
                        $result = mysqli_query($con, "SELECT * FROM $tbl_name");
                        while($row = mysqli_fetch_array($result)){
                            echo"
                        <div class='content__card'>
                            <img src='../$row[img]' class='content__card__image' alt='...'>
                            <h2 class='content__card__title'>$row[name]</h2>
                            <div class='content__card__body'>
                                <a href='update.php? id=$row[matr]' class='edit' name='edit'>Edit</a>
                                <a onclick='checker()' href='config/delete.php? id=$row[matr]' class='delete' name='delete'>Delete</a>
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