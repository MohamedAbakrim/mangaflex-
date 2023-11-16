<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mangaflex";

    $conn = mysqli_connect($servername, $username, $password, $dbname);    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
        
    $sql = "SELECT username, telephone FROM clients;";
    $result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
        if($row["username"] == $_POST["username"]){
            exit("username");
        }
        if($row["telephone"] == $_POST["telephone"]){
            exit("telephone");
        }
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["telephone"] = $_POST["telephone"];
        exit("sucess");
    }
        
            
    mysqli_close($conn);
?>