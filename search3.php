<?php
    session_start();
    $search = $_POST["search"];
    $_SESSION["search"] = $search;



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mangaflex";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
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
                        <a id="hello" style="text-decoration:none;font-size:20px;font-weight:bold" class="nav-link text-white" href="myclients.php">Clients</a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration:none;font-size:20px;font-weight:bold" class="nav-link text-white" href="myfactures.php">factures</a>
                    </li>
                </ul>
            <form class="d-flex" action="search3.php" method="post">
                <input class="form-control me-2" type="text" placeholder="Search for a client" name="search">
                <button type="submit" class="btn btn-danger" type="button">Search</button>
            </form>
            </div>
        </div>
    </nav>    
    <hr>
    <?php
    $sql = "SELECT * FROM clients";
    $result = mysqli_query($conn, $sql);


    $username = "";
    $email ="";
    $password = "";
    $telephone = "";
    $offer = "";
    $num_facture = "";

    while ($row = mysqli_fetch_assoc($result)){
       if ($row["email"] == $search || $row["username"] == $search || $row["telephone"] == $search){
            $num_facture = $row['num_facture'];
            $username = $row['username'];
            $password = $row['password'];
            $email = $row['email'];
            $telephone = $row['telephone'];
            $offer = $row['offer'];
            echo "<div class='row mb-5'>
                    <div class='col-2'></div>
                    <div class='col-2'></div>
                    <div id='hidden' class='col-4'>
                        <div class='bg-white pb-5 text-center rounded'>
                            <i class='mt-3 far fa-user fa-5x'></i>
                            <ul style='list-style:none' class='mt-5 text-start'>
                                <li style='font-weight:bolder'>Email : $email<span></span></li>
                                <li style='font-weight:bolder'>Username : $username<span></span></li>
                                <li style='font-weight:bolder'>Password : $password<span></span></li>
                                <li style='font-weight:bolder'>Telephone : $telephone<span></span></li>
                                <li style='font-weight:bolder'>Offer : $offer<span></span></li>
                                <li style='font-weight:bolder'>Num Facteur : $num_facture<span></span></li>
                            </ul>
                            <form action='supprimer3.php' method='post'>
                                <input type='submit' class='btn btn-outline-danger' value='Supprimer'>
                            </form>  
                        </div>
                    </div>
                </div>";
       }
    };
    if ($username == "" && $email == "" && $password == "" && $telephone == "" && $offer == "" && $num_facture == ""){
        echo "<div class='row mb-5'>
                <div class='col-2'></div>
                <div class='col-2'></div>
                <div id='hidden' class='col-4'>
                    <div class='bg-white pb-5 text-center rounder'>
                        <i class='mt-3 far fa-user fa-5x'></i>
                        <p style='font-weight:bolder' class='mt-5'> This client does not exist</p>
                    </div>
                </div>
            </div>";
    }


    mysqli_close($conn);
?>

</body>
</html>