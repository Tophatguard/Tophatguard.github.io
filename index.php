<!DOCTYPE html>
<html>
    <head>
        <title>Tophatguard.com - login<title>
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

            <button type="submit">Login</button>
            <p>or continue as a<a href="homeguest.html">guest</a></p>
        </form>
    </body>
</html>