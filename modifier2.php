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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body{
            background-color:black;
        }
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
        #hello:hover{
            color:red;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="text-danger navbar-brand" style="text-decoration:none" href="mainadmin.php"><h1 class="h1 ps-5 pt-2 pe-5">MANGAFLEX</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a id="hello" style="text-decoration:none;font-size:20px;font-weight:bold" class="nav-link text-white" href="modifier.php">modifier</a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration:none;font-size:20px;font-weight:bold" class="nav-link text-white" href="supprimer.php">supprimer</a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration:none;font-size:20px;font-weight:bold" class="nav-link text-white" href="ajouter.php">ajouter</a>
                    </li>
                </ul>
            <form class="d-flex" action="search2.php" method="post">
                <input class="form-control me-2" type="text" placeholder="Search for a client" name="search">
                <button type="submit" class="btn btn-danger" type="button">Search</button>
            </form>
            </div>
        </div>
    </nav>    
    <hr>
    <div class="container text-center">
        <h2 class="h2 mt-5 mb-3">Your modifacation is Done!</h2>
        <a href="mainadmin.php"><button class="btn btn-danger">GO Back</button></a>
    </div>
</body>
</html>