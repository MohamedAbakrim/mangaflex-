<?php
    sessuion_start();


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fakenetflix";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn){
        die("Connection failed: " . mysqli_connect_error());
    }
        
    $sql = "INSERT INTO table_name (email, , column3, ...)
    VALUES (value1, value2, value3, ...);";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
        if ($row['email'] = $_POST["email"] && $row["password"] == $_POST["password"]){
            header("location:main.php");
        }else{
            header("location:validation.php");
        }
    }
    

    mysqli_close($conn);



?>