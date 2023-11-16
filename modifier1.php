<?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mangaflex";
        $search = $_POST["search"];
        $_SESSION["search"] = $_POST["search"];
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM clients WHERE username = '$search'";
        $result = mysqli_query($conn, $sql);


        $username = "";
        $email ="";
        $password = "";
        $telephone = "";
        $offer = "";
        $num_facture = "";
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
            </div>
        </div>
    </nav>    
    <hr>
    <div class="row mb-5">
        <div class="col-4"></div>
        <div class="col-4 text-center">
            <form action="modifier1.php" method="post">
                <div class="form-floating">
                    <input type="text" class="form-control" name="search" id="search" placeholder="ENTER THE EMAIL OR THE USERNAME OR THE PHONE NUMBER OF THE CLIENT">
                    <label for="search">ENTER THE EMAIL OR THE USERNAME OR THE PHONE NUMBER OF THE CLIENT</label>
                </div>
                <input style="width:100%" class="mt-3 btn btn-outline-danger" type="submit" value="SEARCH">
            </form>    
        </div>
    </div>
        <?php
            
            while ($row = mysqli_fetch_assoc($result)){
                $username = $row["username"];
                $email = $row["email"];
                $password = $row["password"];
                $telephone = $row["telephone"];
                $offer = $row["offer"];
                $num_facture = $row["num_facture"];
            }
            if ($username == "" && $email == "" && $password == "" && $telephone == "" && $offer == "" && $num_facture == ""){
                echo "<div class='row mb-5'>
                        <div class='col-2'></div>
                        <div class='col-2'></div>
                        <div id='hidden' class='col-4'>
                            <div class='bg-white pb-5 text-center rounded'>
                                <i class='mt-3 far fa-user fa-5x'></i>
                                <p style='font-weight:bolder' class='mt-5'> This client does not exist</p>
                            </div>
                        </div>
                     </div>";
            }else{
                echo "<div class='row'>
                        <div class='col-2'></div>
                        <div class='col-2'></div>
                        <div id='hidden' class='bg-white text-center rounded col-4'>
                            <i class='mt-3 far fa-user fa-5x'></i>
                            <ul style='list-style:none' class='mt-5 text-start'>
                                <li style='font-weight:bolder'>Email : <span>$email</span></li>
                                <li style='font-weight:bolder'>Username : <span>$username</span></li>
                                <li style='font-weight:bolder'>Password : <span>$password</span></li>
                                <li style='font-weight:bolder'>Telephone : <span>$offer</span></li>
                                <li style='font-weight:bolder'>Offer : <span>$telephone</span></li>
                                <li style='font-weight:bolder'>Num Facteur : <span>$num_facture</span></li>
                            </ul>
                            <button id='edit' type='button' class='btn btn-outline-success pe-5 ps-5 mb-3'>Edit</button>
                        </div>
                    </div>";
            }
            mysqli_close($conn);
        ?>
    <div class="row mt-5">
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div id="mydiv" style="display:none" class="col-4">
            <form action="modifier2.php" method="post">
                <div class="form-floating">
                    <input type="email" name="new_email" id="new_email" placeholder="Enter the new email" class="form-control">
                    <label for="new_eamil">Enter the new email</label>
                </div>
                <div class="form-floating mt-4">
                    <input type="password" name="new_password" id="new_password" placeholder="Enter the new password" class="form-control">
                    <label for="new_password">Enter the new password</label>
                </div>
                <div class="form-floating mt-4">
                    <input type="number" name="new_telephone" id="new_telephone" placeholder="Enter the new Phone number" class="form-control">
                    <label for="new_telephone">Enter the new Phone Number</label>
                </div>
                <div class="form-floating mt-4">
                    <input type="text" name="new_username" id="new_username" placeholder="Enter the new usrname" class="form-control">
                    <label for="new_username">Enter the new USERNAME</label>
                </div>
                <input type="submit" value="Confirm" class="btn btn-warning mt-4">
            </form>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#edit").click(function(){
                $("#mydiv").slideDown()
                $('#hidden').slideUp()
            })
        })
    </script>
</body>
</html>