<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!------links------>
    <link rel="stylesheet" href="../css/admin/content_edit.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
    <title>Edit vehicles</title>
</head>
<body>
    <?php include 'admin_navbar.php'; ?>
        <div class="main">
            <h1 id="title">Edit vehicles</h1>
            <section class="page_content">
                    <?php
                        include('../config.php');
                        $result = mysqli_query($con, "SELECT * FROM $tbl_name");
                        while($row = mysqli_fetch_array($result)){
                            echo"
                        <div class='card'>
                            <img src='../$row[img]' class='carf-img-top' alt='...'>
                            <h2 class='card_title'>$row[name]</h2>
                            <div class='card_body'>
                                <a href='update.php? id=$row[matr]' class='edit' name='edit'>Edit</a>
                                <a href='delete.php? id=$row[matr]' class='delete' name='delete'>Delete</a>
                            </div>
                        </div>
                        ";
                        }
                    ?>
                </section>
        </div>
    <script>
        function delete_confirm()
        {
            confirm("Are u sure you want to delete this item?")
        }

        window.addEventListner('load', () =>
        {
            const params = (new URL(document.location)).seatchParams;
            const mtr = params.get('$row[matr]');

            document.getElementById('$row[matr]').innerHTML = mtr;
        })
    </script>
</body>
</html>