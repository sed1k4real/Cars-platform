<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- stylesheet -->
    <link rel="stylesheet" href="./dist/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Login</title>
</head>
<body>
    <div class="login">
        <div class="login__header">
            <a class="home" href="./index.php">
                <span class="material-symbols-outlined">Home</span>
                <h4>Home</h4>
            </a>
            <div class="login__header__signup">
                <a class="login__header__signup__btn" href="./sign_up.php"><h4>Sign up</h4></a>
            </div>
        </div>
        <div class="login__container">
            <div class="login__container__form">
                <h2>Login to your account</h2><br>
                <form action="">
                    <div class="cell">
                        <label for=""><h4>User name</h4></label>
                        <input type="text" placeholder="xyz01" required>
                    </div>
                    <div class="cell">
                        <label for=""><h4>Password</h4></label>
                        <input type="password" placeholder="********" required>
                    </div>
                </form>
                <div class="btn">
                    <center><button class="btn__signup"><h4>Login</h4></button></center>
                    <center><button class="btn__google"><img src="./assets/Google__G__Logo.svg"><h4>Sign with google</h4></button></center>
                </div>
                <center>
                    <h4>website terms and conditions</h4>
                </center>
            </div>
            <div class="login__container__img">
                <img src="./assets/alessio-lin-2n1SciGY5dI-unsplash.jpg" alt="">
            </div>
        </div>
    </div>
</body>
</html>