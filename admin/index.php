<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <link rel="stylesheet" href="../dist/css/admin.css">
    <title>Admin panel</title>
</head>
<body>
    <?php include 'admin_navbar.php'; ?>
    <div class="insights">
        <h2 class="insights__title">Insights</h2>
        <div class="insights__container">
            <div class="insights__container__block">
                <div class="insights__container__block__elements">
                <span class="material-symbols-sharp">visibility</span>
                    <p>Views</p>
                    <h2>500</h2>
                    <p>Per day</p>
                </div>
                <div class="insights__container__block__elements">
                    <span class="material-symbols-sharp">explore</span>    
                    <p>Visits</p>
                    <h2>2000</h2>
                    <p>Per hour</p>
                </div>
                <div class="insights__container__block__elements">
                    <span class="material-symbols-sharp">directions_car</span>
                    <p>Vehicles</p>
                    <h2>150</h2>
                    <p>Per day</p>
                </div>
            </div>

            <div class="insights__container__previewer">
                <h2>Sales revenue</h2>
                <div class="insights__container__previewer__elements">
                    <span class="material-symbols-sharp">equalizer</span>
                    <div class="insights__container__previewer__elements__item">
                        <h2>245000$</h2>
                        <p>Per month</p>
                    </div>
                </div>
            </div>
            <div class="insights__container__cards">
                <span class="material-symbols-sharp">equalizer</span>
                <h3>Sales</h3>
                <p>Total sales today</p>
                <h2>125000$</h2>
            </div>
            <div class="insights__container__cards">
                <span class="material-symbols-sharp">shopping_cart_checkout</span>
                <h3>Orders</h3>
                <p>Total Orders today</p>
                <h2>75</h2>
            </div>
            <div class="insights__container__cards">
                <span class="material-symbols-sharp">show_chart</span>
                <h3>Profit</h3>
                <p>Total profit today</p>
                <h2>125000$</h2>
            </div>
        </div>
    </div>
</body>
</html>