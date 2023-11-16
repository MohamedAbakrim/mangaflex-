<?php
    session_start();
    $email = $_POST["email"];
    $mypassword = $_POST["password"];

    if($email == "admin" && $mypassword == "1234"){
        exit("admin");
    }

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mangaflex";

    $conn = mysqli_connect($servername, $username, $password, $dbname);    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
        
    $sql = "SELECT * FROM clients WHERE email='$email' AND password='$mypassword';";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        exit("success");
    }else{
        exit("failed");
    }
        
            
    mysqli_close($conn);
?>