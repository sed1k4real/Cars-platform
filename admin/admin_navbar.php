<!DOCTYPE html>
<html lang="en">
<head>
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="../dist/css/admin.css">
</head>
<body>
    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    
    <aside>
        <div class="navbar">            
            <a id="logo" class="navbar__logo" href="index.php"><h1>DZ<span id="col">CREW</span></h1></a>
            <div class="navbar__panel">
                <div class="navbar__panel__container">
                    <a class="<?= ($activePage == 'profile') ? 'active':''; ?>" href="">
                        <span class="material-symbols-sharp">account_circle</span>
                        <h3>Admin profile</h3>
                    </a>
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
                        <div id="droplist" class="dropdown__droplist">
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
