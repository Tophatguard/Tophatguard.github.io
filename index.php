<!DOCTYPE html>
<html>
    <head>
        <title>Tophatguard.com - login</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        <form action="login.php" method="post">
            <h2>login:</h2>
            <?php if(isset($_GET['error'])) { ?>
                <p class="error"> <?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label> User Name</label>
            <input type="text" name="uname" placeholder="Enter your username here..."><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password here..."></br>

            <p>to create an account e-mail NOTAOVUD@gmail.com your username and (optional) password.</p>
            <p>once e-mailed me I will email you back your password if you didn't tell me one and username and if I succesfully made your account.</p>

            <button type="submit">Login</button>
            <p>or continue as a <a href="homeguest.html">guest</a></p>
        </form>
    </body>
</html>