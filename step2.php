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
    <div style="width:400px"class="container text-center pt-5">
        <img width="80px" src="done.png" alt="">
        <h6 class="h6">step 2 Of 3</h6>
        <h3 class="h3 mb-4">Choose Your Plan.</h3>
        <p class="text-start mb-4 ms-4"><img width="30px" class="me-2" style="color:red" src="done2.png" alt="">No commitments, cancel anytime.</p>
        <p class="text-start mb-4 ms-4"><img width="30px" class="me-2" src="done2.png" alt="">Everything on Netflix for one low price.</p>
        <p class="text-start mb-4 ms-4"><img width="30px" class="me-2" src="done2.png" alt="">Unlimited viewing on all your devices.</p>
        <a style="text-decoration:none;" href="step3.php"><button style="width:100%;height:60px;font-weight:bold;font-size:18px;color:white" class="btn btn-danger mt-4">NEXT</button></a>
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
</body>
</html>