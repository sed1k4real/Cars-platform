<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="../css/admin/navbar.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
    <title>Navbar</title>
</head>
<body>
    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    
    <aside>
        <div class="container">
            <div class="navbar">
                <a id="logo" href="index.php"><h1>DZ<span id="col">CREW</span></h1></a>
                
                <a class="<?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">
                    <span class="material-symbols-sharp">insights</span>
                    <h3>Insights</h3>
                </a>

                <a class="<?= ($activePage == 'webpage') ? 'active':''; ?>" href="webpage.php">
                    <span class="material-symbols-sharp">language</span>
                    <h3>Webpage</h3>
                </a>

            <div id="dropdown" class="dropdown">
                <a class="<?= ($activePage == 'content_insert' || $activePage == 'content_edit') ? 'active':''; ?>" href="#">
                    <span class="material-symbols-sharp">dashboard</span>
                    <h3>Content</h3>
                    <span class="material-symbols-sharp">expand_more</span>
                </a>
                <div id="droplist" class="droplist">
                    <a class="<?= ($activePage == 'content_insert') ? 'active':''; ?>" href="content_insert.php">
                        <span class="material-symbols-sharp">add</span>
                        <h3>Add</h3>
                    </a>
                    <a class="<?= ($activePage == 'content_edit') ? 'active':''; ?>" href="content_edit.php">
                        <span class="material-symbols-sharp">edit</span>
                        <h3>Edit</h3>
                    </a>
                </div>
            </div>
            
                <a class="<?= ($activePage == 'deals') ? 'active':''; ?>" href="deals.php">
                    <span class="material-symbols-sharp">cases</span>
                    <h3>Deals</h3>
                </a>

                <a class="<?= ($activePage == 'settings') ? 'active':''; ?>" href="settings.php">
                    <span class="material-symbols-sharp">settings</span>
                    <h3>Settings</h3>
                </a>
            </div>

            
            <a href="#">
                <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
            </a>

        </div>
    </aside>

    <script>
        document.getElementById("dropdown").onclick = function() {drop()};

        function drop()
        {
            document.getElementById("droplist").classList.toggle("extended");
        }
    </script>
</body>
</html>
