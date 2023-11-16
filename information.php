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
</head>
<?php
session_start();
$_SESSION["email"] = "mohammedabakrim@gmail.com";
$_SESSION["password"] = "typingclub";
$_SESSION["telephone"] = 658413299;
$_SESSION["username"] = "Abakrim_Itachi";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywebsite";

$conn = mysqli_connect($servername,$username, $password, $dbname);
if (!$conn){
    die("Connection faild" . mysqli_connect_error());
} 

$sql = "SELECT email, password, telephone, username FROM clients";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    while ($row = mysqli_fetch_assoc($result)){
        $email = $row["email"];
    }
}
?>
<body class="mb-5">
    <div style="width:40%" class="mt-5 ps-3 pt-5 pb-5 container bg-light border rounded text-start">
        <span class="h3">Email : </span> <span class="text-muted"><?php echo $email;?></span><button class="btn btn-outline-danger">Change</button><br>
        <span class="h3">Username : </span> <span class="text-muted"></span><button class="btn btn-outline-danger">Change</button><br>
        <span class="h3">Password : </span> <span class="text-muted"></span><button class="btn btn-outline-danger">Change</button><br>
        <span class="h3">Telephone : </span> <span class="text-muted"></span><button class="btn btn-outline-danger">Change</button><br>
    </div>
</body>
</html>