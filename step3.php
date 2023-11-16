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
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <a class="text-danger navbar-brand" style="text-decoration:none" href="index.html"><h1 class="h1 ms-3 pt-2">MANGAFLEX</h1></a>
            <a id="signin" href="index.html" class="text-muted">Sign In</a>
        </div>
    </nav>
    <hr>
    <div class="row pt-5 ps-5">
        <div class="col-xl-3 col-lg-2 col-md-2"></div>
        <div class="col-xl-7 col-lg-8 col-md-10">
            <img width="80px" src="done.png" alt="done">
            <h6 class="h6">step 2 Of 3</h6>
            <h3 class="h3 mb-4">Choose The Plan thats's right for you.</h3>
            <p class="text-start mb-4 ms-4"><img width="30px" class="me-2" style="color:red" src="done2.png" alt="">Read all you want. Ad-free</p>
            <p class="text-start mb-4 ms-4"><img width="30px" class="me-2" src="done2.png" alt="">Recommendations just for you.</p>
            <p class="text-start mb-4 ms-4"><img width="30px" class="me-2" src="done2.png" alt="">Change or cancel your plan anytime.</p>
            <div class="row">
                <div class="col-xl-1 col-lg-12 col-sm-12"></div>
                <div class="col-xl-1 col-lg-12 col-sm-12"></div>
                <div class="col-xl-1 col-lg-12 col-sm-12"></div>
                <div class="col-xl-1 col-lg-12 col-sm-12"></div>
                <div class="text-center col-xl-1 col-sm-12 m-4 pt-5 pb-5" id="basic" style="background-color:red;color:white;font-weight:bold;width:120px">Basic</div>
                <div class="text-center col-xl-1 col-sm-12 m-4 pt-5 pb-5" id="standard" style="background-color:red;color:white;font-weight:bold;width:120px">Standard</div>
                <div class="text-center col-xl-1 col-sm-12 m-4 pt-5 pb-5" id="permium" style="background-color:red;color:white;font-weight:bold;width:120px">Premium</div>
            </div>
            <div class="row" style="width:80%">
                <div class="col-xl-6 col-lg-5 col-md-6">Monthly price</div>
                <div class="basic col-xl-2 col-lg-2 col-md-2">MAD65</div>
                <div class="standard col-xl-2 col-lg-2 col-md-2">MAD95</div>
                <div class="permium col-xl-2 col-lg-2 col-md-2">MAD125</div>
                <hr class="mt-3">
            </div>
            <div class="row" style="width:80%">
                <div class="col-xl-6 col-lg-5 col-md-6">Manga quality</div>
                <div class="basic col-xl-2 col-lg-2 col-md-2">Good</div>
                <div class="standard col-xl-2 col-lg-2 col-md-2">Better</div>
                <div class="permium col-xl-2 col-lg-2 col-md-2">Best</div>
                <hr class="mt-3">
            </div>
            <div class="row" style="width:80%">
                <div class="col-xl-6 col-lg-5 col-md-6">Read on your TV, computer, mobile phone and tablet</div>
                <div class="col-xl-2 col-lg-2 col-md-2"><img width="30px" class="me-2" style="color:red" src="done2.png" alt=""></div>
                <div class="col-xl-2 col-lg-2 col-md-2"><img width="30px" class="me-2" style="color:red" src="done2.png" alt=""></div>
                <div class="col-xl-2 col-lg-2 col-md-2"><img width="30px" class="me-2" style="color:red" src="done2.png" alt=""></div>
                <hr class="mt-3">
            </div>
            <form action="step4.php" method="post">
                <input style="display:none" type="text" name="offer" id="offer">
                <a style="text-decoration:none;" href="step4.php"><button style="width:80%;height:60px;font-weight:bold;font-size:18px;color:white" class="btn btn-danger mt-4">NEXT</button></a>
            </form>
        </div>
    </div>
    <div style="margin-top:9%;height:60vh" class="footer bg-black bg-opacity-75 p-4">
        <div class="row">
            <div class="col-xl-3 col-lg-1 col-md-12"></div>
            <div class="col-xl-2 col-lg-3 col-md-3">
                <a href="#" class="text-muted">Questions? Contuct us.</a><br><br>
                <a href="#" class="text-muted">FAQ</a><br><br>
                <a href="#" class="text-muted">Cookie Preferences</a><br><br>
                <a href="#" class="text-muted">Questions? Contuct us.</a><br><br>
            </div>
            <div style="display:flex;flex-direction: column;justify-content: center;" class="col-xl-2 col-lg-3 col-md-3">
                <a href="#" class="text-muted">Help Center</a><br><br>
                <a href="#" class="text-muted">Coreporate Information</a><br><br>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-3" style="display:flex;flex-direction:column;justify-content: center;">
                <a href="#" class="text-muted">Terms Of Use</a><br><br>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3" style="display:flex;flex-direction:column;justify-content: center;">
                <a href="#" class="text-muted">Privacy</a><br><br>
            </div>
            <div class="col-xl-2 col-lg-1 col-md-12"></div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#standard").css("opacity",'0.5')
            $("#permium").css("opacity",'0.5')
            $(".basic").css({"color":"red","font-weight":"bolder"})
            $("#offer").val("basic")
            $("#standard").click(function(){
                $("#standard").css("opacity",'1')
                $("#permium").css("opacity",'0.5')
                $("#basic").css("opacity","0.5")
                $(".standard").css({"color":"red","font-weight":"bolder"})
                $(".basic").css({"color":"black","font-weight":"normal"})
                $(".permium").css({"color":"black","font-weight":"normal"})
                $("#offer").val("standard")            })
            $("#permium").click(function(){
                $("#permium").css("opacity",'1')
                $("#basic").css("opacity",'0.5')
                $("#standard").css("opacity","0.5")
                $(".permium").css({"color":"red","font-weight":"bolder"})
                $(".basic").css({"color":"black","font-weight":"normal"})
                $(".standard").css({"color":"black","font-weight":"normal"})
                $("#offer").val("permium")            })
            $("#basic").click(function(){
                $("#basic").css("opacity",'1')
                $("#permium").css("opacity",'0.5')
                $("#standard").css("opacity","0.5")
                $(".basic").css({"color":"red","font-weight":"bolder"})
                $(".standard").css({"color":"black","font-weight":"normal"})
                $(".permium").css({"color":"black","font-weight":"normal"})
                $("#offer").val("basic")
            })
        })
    </script>
</body>
</html>
