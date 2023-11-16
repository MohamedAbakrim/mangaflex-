<?php

session_start();
    $mypassword = $_POST["password"];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mangaflex";

    $conn = mysqli_connect($servername, $username, $password, $dbname);    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
        
    $sql = "SELECT * FROM clients WHERE password='$mypassword';";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        exit("failed");
    }else{
        $_SESSION["password"] = $mypassword;
        exit("success");
    }
        
            
    mysqli_close($conn);

?>