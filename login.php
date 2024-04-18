<?php
    session_start();
    include "db_conn.php";

    if(isset($_POST['unname']) && isset($_POST['password'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if(empty($uname)) {
        header ("localtion: index.php?error=User name is required");
        exit();
    }
    else if(empty($pass)) {
        header("location: index.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['user_name'] === $uname && $row['password'] === $pass) {
            echo "Logged in!";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['user_name'];
            $_SESSION['id'] = $row['id'];
            header("location: home.php");
            exit();
        }
    
        else{
            header("location: index.php?error=Incorrect User Name or Password");
        }
    }
    else {
        header("location: index.php");
        exit();
    }