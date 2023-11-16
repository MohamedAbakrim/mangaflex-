<?php
    session_start();
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
        .hello:hover{
            cursor:pointer;
        }
        /* .manga :hover{
            border-right:3px solid red;
            border-bottom:3px solid red;
        } */
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="text-danger navbar-brand" style="text-decoration:none" href="main.php"><h1 class="h1 ps-5 pt-2 pe-5">MANGAFLEX</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a id="hello" style="text-decoration:none;font-size:20px;font-weight:bold" class="nav-link text-white me-3" href="#">Top rated</a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration:none;font-size:20px;font-weight:bold" class="nav-link text-white me-3" href="#">Most views</a>
                    </li>
                    <li class="nav-item">
                        <a style="text-decoration:none;font-size:20px;font-weight:bold" class="nav-link text-white me-3" href="#">New on MANGAFLEX</a>
                    </li>
                </ul>
                <div class="dropdown me-4">
                    <button type="button" class="btn btn-black text-white dropdown-toggle" data-bs-toggle="dropdown">
                        <i style="color:white" class="hello fas fa-cog fa-lg"></i>
                    </button>
                    <ul class="dropdown-menu bg-black">
                        <li style="cursor:pointer" id="information" class="dropdown-item text-white">My informations</li>
                        <li style="cursor:pointer" id="facture" class="dropdown-item text-white">My facture</li>
                    </ul>
                </div>
                <a id="signin" href="logout.php" class="ps-2 text-muted">Log Out</a>
            </div>
        </div>
    </nav> 
    <div class="row">
        <div class="col-1"></div>
        <div class="col-2 manga">
            <h2 class="text-white text-center">SOLO LEVELING</h2>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="sololeveling.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">solo leveling</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae amet fugit rem molestiae eveniet ipsum ut culpa, totam dolor consequatur.</p>
                    <a href="#" class="btn btn-primary">READ manga</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-2 manga">
            <h2 class="text-white text-center">SOLO LEVELING</h2>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="sololeveling.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">solo leveling</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae amet fugit rem molestiae eveniet ipsum ut culpa, totam dolor consequatur.</p>
                    <a href="#" class="btn btn-primary">READ manga</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-2 manga">
            <h2 class="text-white text-center">SOLO LEVELING</h2>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="sololeveling.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">solo leveling</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae amet fugit rem molestiae eveniet ipsum ut culpa, totam dolor consequatur.</p>
                    <a href="#" class="btn btn-primary">READ manga</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-2 manga">
            <h2 class="text-white text-center">SOLO LEVELING</h2>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="sololeveling.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">solo leveling</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae amet fugit rem molestiae eveniet ipsum ut culpa, totam dolor consequatur.</p>
                    <a href="#" class="btn btn-primary">READ manga</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-2 manga">
            <h2 class="text-white text-center">SOLO LEVELING</h2>
            <div class="card" style="width:300px">
                <img class="card-img-top" src="sololeveling.jpg" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">solo leveling</h4>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae amet fugit rem molestiae eveniet ipsum ut culpa, totam dolor consequatur.</p>
                    <a href="#" class="btn btn-primary">READ manga</a>
                </div>
            </div>
            <br>
        </div>
        <div class="col-1"></div>
    </div>    
    <div style="font-weight:bolder" class="row text-muted mt-5" id="main">
        <div class="col-2"></div>
        <div class="col-2"></div>
    </div>
    <div style="font-weight:bolder" class="row text-muted mt-5" id="main3">
        <div class="col-2"></div>
        <div class="col-2"></div>
    </div>
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
            $(".manga").mouseenter(function(){
                $(".card").css("border-right","3px solid red")
                $(".card").css("border-bottom","3px solid red")
            })
            $(".manga").mouseleave(function(){
                $(".card").css("border-right","0px solid red")
                $(".card").css("border-bottom","0px solid red")
            })
            let button = `<button type="button" style="width:20%" class="btn mt-5 btn-warning"><a style="text-decoration:none;color:black" href="changer.php">edit</a></button>`
            $("#main").hide()
            $("#information").click(function(){
                $("#main").show()
                $.ajax(
                    {
                        url:"informations.php",
                        method:"POST",
                        success:function(response){
                            $("#main").append(response)
                            $("#main2").append(button)
                        },
                        dataType:'text'
                    }
                )
            })
            $("#main3").hide()
            $("#facture").click(function(){
                alert("hello")
                $("#main3").show()
                $.ajax(
                    {
                        url:"facture.php",
                        method:"POST",
                        success:function(response){
                            $("#main3").append(response)
                        },
                        dataType:'text'
                    }
                )
            })
            
        })
    </script>
</body>
</html>