<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mangaflex";
        $email = $_SESSION["email"];
        $search = $_SESSION["search"];
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        $_SESSION["new_email"] = $_POST['new_email'];
        $new_email = $_SESSION["new_email"];
        $_SESSION["new_password"] = $_POST['new_password'];
        $new_password = $_SESSION["new_password"];
        $_SESSION["new_telephone"] = $_POST['new_telephone'];
        $new_telephone = $_SESSION["new_telephone"];
        $_SESSION["new_username"] = $_POST['new_username'];
        $new_username = $_SESSION["new_username"];
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "UPDATE clients
        SET email = '$new_email',
        password = '$new_password',
        telephone = '$new_telephone',
        username = '$new_username'
        WHERE email = '$email';";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
        header("location:main.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>