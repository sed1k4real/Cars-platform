<!DOCTYPE html>
<html lang="en">
<head>

    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="dist/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
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
                <li><a class="navbar__signup" href="sign_up.php"><h4>Sign up</h4></a></li>
                <li><a class="navbar__login" href="log_in.php">Login</a></li>
            </ul>
        </div>
    </nav>
</body>
</html>
