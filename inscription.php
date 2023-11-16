<?php

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
        *{
            margin:0;
            padding:0;
        }
        body{
            background-color:black;
        }
        h1{
            font-family: 'Trebuchet MS', sans-serif;
            text-align:center
        }
        h1{
            font-size:60px;
        }
        p{
            font-size:35px;
        }
        @media screen and (min-width: 768px) {
            body {
                background-image: url("background.jpg");  
            }
        }
        @media screen and (min-width: 480px) {
            h1{
            text-align: left;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="text-danger navbar-brand" style="text-decoration:none" href="index.html"><h1 class="h1 ms-3 pt-2">MANGAFLEX</h1></a>
            <form class="d-flex" action="index.html">
                <select class="bg-black text-white me-3 pb-2 ps-3 pe-3" name="langue" id="langues">
                    <option value="arabic">العربية</option>
                    <option value="french">Francais</option>
                    <option value="english" selected>English</option>
                </select>
                <button style="font-weight:bold;" class="btn btn-danger pt-1 ps-3 pe-3 pb-1">Sign In</button>
            </form>
        </div>
    </nav>
    <div class="container text-center text-white mt-5 p-5 bg-black bg-opacity-75">
        <h1 class="ms-2 me-2 mt-5">
            Unlimited Manga And Manhwa And More.
        </h1>
        <p>Read anywhere, Cancel anytime.</p>
        <p style="font-size:20px">Ready to read? Enter your email to create or restart your membership.</p>
        <form action="getstarted.php" method="post" class="mb-5">
            <p style="font-size:20px" id="validation"></p>
            <div class="input-group text-black">
                <div class="form-floating flex-grow-1">
                    <input class="form-control" type="email" name="email" id="email" placeholder="Email adress">
                    <label for="email">Email adress</label>
                </div>
                <input type="button" id="get_started" value="Get Started" class="btn btn-danger">
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function(){
            $("#get_started").on("click",function(){
                let email = $("#email").val()
                if (email == ""){
                    $("#validation").text("Please enter your email")
                    $("#validation").css("color","orange")
                    $("#email").css("border","2px solid orange")
                }else{
                    $.ajax(
                        {
                            url:"getstarted.php",
                            method:'POST',
                            data:{
                                email:email
                            },
                            success:function(response){
                                if(response == "failed"){
                                    $("#validation").text("This email already registered")
                                    $("#validation").css("color","orange")
                                    $("#email").css("border","2px solid orange")
                                }else{
                                    window.location = "getstarted1.php"
                                }
                            },
                            dataType:'text'
                        }
                    )
                }
            })
        })
    </script>
</body>
</html>