<!DOCTYPE html>
<html lang="en">
<head>

    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="dist/css/main.css">
    <title>Navbar</title>
</head>

<body>

    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    
    <nav>
        <div class="navbar">
            <a class ="navbar__logo" href="index.php"><h1>DZ<span id="col">CREW</span></h1></a>
            <div class="navbar__container">
                <a class="<?= ($activePage == 'index') ? 'active':''; ?>" href="index.php"><h3>Home</h3></a>
                <a class="<?= ($activePage == 'news') ? 'active':''; ?>" href="news.php"><h3>News</h3></a>
                <div class="dropdown">
                    <a class="<?= ($activePage == 'vehicles') ? 'active':''; ?>" href="vehicles.php"><h3>Vehicles</h3>
                    <span class="material-symbols-outlined">expand_more</span></a>
                        <div class="dropdown-content">
                            <a href="#"><h4>Class S</h4></a>
                            <a href="#"><h4>Class A</h4></a>
                            <a href="#"><h4>Class B</h4></a>
                            <a href="#"><h4>Truck</h4></a>
                            <a href="#"><h4>Van</h4></a>
                            <a href="#"><h4>Motorcycle</h4></a>
                            </div>
                    </div>
                <a class="<?= ($activePage == 'specialDeals') ? 'active':''; ?>" href="specialDeals.php"><h3>Special deals</h3></a>
            </div>
            <!-- <a class="navbar__login" href="">Login</a> -->
            <ul>
                <li><a class="navbar__signup" href=""><h4>Sign up</h4></a></li>
                <li><a class="navbar__login" href="">Login</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
