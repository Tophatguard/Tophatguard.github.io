<?php
    session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en-US">
        <head>
            <title>Tophatguard.com</title>
            <link href="styles.css">
            <link href="app.js">
        </head>
        <body>
            <h1>Welcome to Tophatguard.com</h1>
            <p>if you are looking for my youtube, <a href="https://www.youtube.com/channel/UCY0Vrkt4kb_kVIpfJOIQ3GA">click here</a></p>
            <p>click the button below to download my ios game(unfinished).</p>
            <a href="GUNSHOT.cci" download><button>download GUNSHOT</button></a>
            <p>I am currently working on <b>game developing</b></p>
            <p>logged in as: <?php echo $_SESSION['user_name']; ?></p>
            <a href="logout.php"><button>logout</button></a>
        </body>
    </html>

    <?php
}
else {
    header("location: index.php");
    exit();
}
?>