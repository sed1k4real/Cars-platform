<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Stylesheet-->
    <link rel="stylesheet" type="text/css" href="../dist/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;0,800;1,800&display=swap" rel="stylesheet">
    <title>Settings</title>
</head>
<body>
    <?php include 'admin_navbar.php'; ?>
    
    <div class="settings">
        <div class="settings__container">
            <h2>Account settings</h2>
            <div class="settings__container__form --profile">
                <div class="cell">
                    <label for="firstN">First Name</label><br>
                    <input type="text" name="firstName" placeholder="First Name"><br>
                </div>
                <div class="cell">
                    <label for="lastN">Last Name</label><br>
                    <input type="text" name="lastName" placeholder="Last Name"><br>
                </div>
                <div class="cell">
                    <label for="email">Email</label><br>
                    <input type="email" name="email" placeholder="Email"><br>
                </div>
                <div class="cell">
                    <label for="num">Phone Number</label><br>
                    <input type="text" name="num" placeholder="Phone Number"><br>
                </div>
                <div class="cell">
                    <label for="dep">Departement</label><br>
                    <input type="text" name="dep" placeholder="Departement"><br>
                </div>
                <div class="cell">
                    <label for="pos">Position</label><br>
                    <input type="text" name="pos" placeholder="Position"><br>
                </div>
                <div class="cell">
                    <label for="bio">Bio</label><br>
                    <textarea type="text" name="bio" placeholder="Bio"></textarea><br>
                </div>
            </div>
            <div class="settings__container__ctabtn">
                <button class="update">Update</button>
                <button>Cancel</button>
            </div>

            <hr>

            <h2>Password</h2>
            <div class="settings__container__form">
                <div class="cell">
                    <label for="pw">Current Password</label><br>
                    <input type="password" name="pw" placeholder="Current Password"><br>
                </div>
                <div class="cell">
                    <label for="pw">Confirm Current Password</label><br>
                    <input type="password" name="pw" placeholder="Confirm Current Password"><br>
                </div>
                <div class="cell">
                    <label for="npw">New Password</label><br>
                    <input type="password" name="npw" placeholder="New password"><br>
                </div>
                <div class="cell">
                    <label for="npw">Confirm New password</label><br>
                    <input type="password" name="npw" placeholder="Confirm New password"><br>
                </div>
            </div>
            <div class="settings__container__ctabtn">
                <button class="update">Update</button>
                <button>Cancel</button>
            </div>

            <hr>
            <h2>Appearance</h2>
            <div class="settings__container__appearance">
                <h3>Dark Mode</h3>
                <div class="settings__container__appearance__options">
                    <input class="checkmark" name="dark mode" type="radio">
                    <label>On</label>
                    <input class="checkmark" name="dark mode" type="radio" checked="checked">
                    <label>Off</label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>