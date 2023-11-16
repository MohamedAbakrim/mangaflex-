<?php
    session_start();
    echo "<span style='display:none'id='span'>".$_SESSION["email"]."</span>";
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
    <div style="width:400px"class="container text-start pt-5">
        <h6 class="h6">step 1 Of 3</h6>
        <h2 class="h2">Create a password to start your membership</h2>
        <p style="font-size:20px">Just a few more steps and you're done! We hate paperwork, too.</p>
        <form action="step1ajax.php" method="post">
            <div class="form-floating">
                <input class="form-control" type="text" name="email" placeholder="Email or phone number" id="email">
                <label id="email_label" class="text-muted" for="email">Email or phone number</label>
            </div>
            <div class="form-floating mt-3">
                <input type="password" placeholder="Password" class="form-control" name="password" id="password">
                <label class="text-muted" for="password">Password</label>
            </div>
            <span id="password_span"></span>
            <div class="mt-3">
                <input class="form-check-input" type="checkbox" id="donot" name="donot" value="do not" checked>
                <label class="text-muted form-check-label">Do Not Email Me MANGAFLEX special offers.</label>
            </div>
            <input class="mt-3 form-control btn btn-danger" id="next" style="height:60px;font-weight:bold;font-size:18px;color:white;" type="button" value="NEXT">
        </form>
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
            $("#email").val($("#span").text());
            $("#next").on("click", function(){
                password = $("#password").val()
                if (password == ""){
                    $("#password_span").text("please fill this field")
                    $("#password_span").css("color","red")
                    $("#password").css("border","1px solid red")
                }else{
                    $.ajax(
                        {
                            url:"step1ajax.php",
                            method:"POST",
                            data:{
                                password:password
                            },
                            success:function(response){
                                if (response == "failed"){
                                    $("#password_span").text("please secure your password more.")
                                    $("#password_span").css("color","red")
                                    $("#password").css("border","1px solid red")
                                }else{
                                    window.location = "step2.php"
                                }
                            }
                        }
                    )
                }
            })
        })
    </script>
</body>
</html>