<!DOCTYPE html>
<html lang="en">
<head>

    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Navbar</title>
</head>

<body>

    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    
    <nav>
        <div class="container navbar__container">
            <a href="index.php"><h1>DZ<span id="col">CREW</span></h1></a>
            <div class="topnavbar">
                <a class="<?= ($activePage == 'index') ? 'active':''; ?>" href="index.php">Home</a>
                <a class="<?= ($activePage == 'news') ? 'active':''; ?>" href="news.php">News</a>
                <div class="dropdown">
                    <a class="<?= ($activePage == 'vehicles') ? 'active':''; ?>" href="vehicles.php">Vehicles<span class="material-symbols-outlined">expand_more</span></a>
                        <div class="dropdown-content">
                            <a href="#">Class S</a>
                            <a href="#">Class A</a>
                            <a href="#">Class B</a>
                            <a href="#">Truck</a>
                            <a href="#">Van</a>
                            <a href="#">Motorcycle</a>
                            </div>
                    </div>
                <a class="<?= ($activePage == 'specialDeals') ? 'active':''; ?>" href="specialDeals.php">Special deals</a>
            </div>
        </div>
    </nav>
</body>
</html>
