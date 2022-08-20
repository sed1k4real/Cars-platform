<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./dist/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Sign up</title>
</head>
<body>
    <di class="signup">
        <div class="signup__header">
            <a class="home" href="./index.php">
                <span class="material-symbols-outlined">Home</span>
                <h4>Home</h4>
            </a>
            <div class="signup__header__login">
                <h3>You have an account?</h3>
                <a class="signup__header__login__btn" href="./log_in.php"><h4>Login</h4></a>
            </div>
        </div>
        <div class="signup__container">
            <div class="signup__container__img">
                <img src="./assets/photo-1493238792000-8113da705763.jpg" alt="">
            </div>
            <div class="signup__container__form">
                <h2>Create your free account</h2><br>
                <form action="">
                    <div class="cell">
                        <label for=""><h4>User name</h4></label>
                        <input type="text" placeholder="xyz01" required>
                    </div>
                    <div class="cell">
                        <label for=""><h4>Email</h4></label>
                        <input type="email" placeholder="user123@email" required>
                    </div>
                    <div class="cell">
                        <label for=""><h4>Password</h4></label>
                        <input type="password" placeholder="********" required>
                    </div>
                    <div class="cell">
                        <label for=""><h4>Confirm password</h4></label>
                        <input type="password" placeholder="********" required>
                    </div>
                    
                </form>
                <div class="btn">
                    <center><button class="btn__signup"><h4>Sign up</h4></button></center>
                    <center><button class="btn__google"><img src="./assets/Google__G__Logo.svg"><h4>Sign with google</h4></button></center>
                </div>
                <center>
                    <h4>website terms and conditions</h4>
                </center>
            </div>
        </div>
    </div>
</body>
</html>