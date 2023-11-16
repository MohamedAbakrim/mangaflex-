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
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];
    $telephone = $_SESSION["telephone"];
    $username = $_SESSION["username"];
    $offer = $_SESSION["offer"];
    $sql = "INSERT INTO clients (email, password, telephone, username, offer)
    VALUES ('$email', '$password', '$telephone', '$username', '$offer');";
    $result = mysqli_query($conn, $sql);


    $sql2 = "SELECT * FROM clients";
    $result2 = mysqli_query($conn, $sql2);
    echo mysqli_num_rows($result2);

    $sql3 = "SELECT MAX(num_facture) FROM clients";
    $result3 = mysqli_query($conn, $sql3);
    $row = mysqli_fetch_assoc($result3);
    foreach ($row as $val){
        $numfacture = ++$val;
    }
    $sql4 = "UPDATE clients SET num_facture = '$numfacture' WHERE email = '$email'";
    $result4 = mysqli_query($conn, $sql4);
    mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>MANGAFLEX</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style>
        #signin{
            font-weight:bolder;
            text-decoration:none;
            font-size:20px
        }
        #signin:hover{
            text-decoration:underline;
        }
        .footer a{
            text-decoration: none;
        }
        .footer a:hover{
            text-decoration: underline;
        }
        p{
            font-size:18px;
        }
    </style>
</head>
<body>
    <div class="row pt-3 pb-0">
        <div class="col-2">
            <a class="text-danger navbar-brand" style="text-decoration:none" href="index.html"><h1 class="h1 ps-5 pt-2">MANGAFLEX</h1></a>
        </div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-2 text-end pt-3 pe-5 pb-5">
            <a id="signin" href="signout.php" class="text-muted">Sign Out</a>
        </div>
        <hr>
    </div> 
    <div style="width:400px"class="container text-center pt-5">
        <img width="80px" src="done.png" alt="">
        <h6 class="h6">Everything is done.</h6>
        <h3 class="h3 mb-4">Welcome to MANGAFLEX</h3>
        <a style="text-decoration:none;" href="main.php"><button style="width:100%;height:60px;font-weight:bold;font-size:18px;color:white" class="btn btn-danger mt-4">Continue to MANGAFLEX</button></a>
    </div>
    <div style="height:30vh;margin-top:15%" class="footer bg-black bg-opacity-75 p-4">
        <div class="row">
            <div class="col-2">
                <a href="#" class="text-muted">Questions? Contuct us.</a><br><br>
                <a href="#" class="text-muted">FAQ</a><br><br>
                <a href="#" class="text-muted">Cookie Preferences</a><br><br>
                <select class="bg-white text-black me-3 pb-2 ps-3 pe-3" name="langue" id="langues">
                    <option value="arabic">العربية</option>
                    <option value="french">Francais</option>
                    <option value="english" selected>English</option>
                </select>
            </div>
            <div style="display:flex;flex-direction: column;justify-content: center;" class="col-2">
                <a href="#" class="text-muted">Help Center</a><br><br>
                <a href="#" class="text-muted">Coreporate Information</a><br><br>
            </div>
            <div class="col-2" style="display:flex;flex-direction:column;justify-content: center;">
                <a href="#" class="text-muted">Terms Of Use</a><br><br>
            </div>
            <div class="col-2" style="display:flex;flex-direction:column;justify-content: center;">
                <a href="#" class="text-muted">Privacy</a><br><br>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</body>
</html>
