<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mangaflex";
    $email = $_SESSION["email"];
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM clients WHERE email = '$email';";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        $username = $row["username"];
        $email = $row["email"];
        $password = $row["password"];
        $telephone = $row["telephone"];
        $offer = $row["offer"];
        $num_facture = $row["num_facture"];
        $_SESSION["password"] = $password;
        $_SESSION["offer"] = $offer;
        $_SESSION["username"] = $username;
        $_SESSION["telephone"] = $telephone;
        $_SESSION["num_facteur"] = $num_facture;
    }
    exit("<div id='main2' class='bg-white text-center rounded col-4 pb-5'>
    <i class='mt-3 far fa-user fa-5x'></i>
    <div class='row mt-5'>
        <div class='text-start col-3'>
            Email : 
        </div>
        <div class='col-2'></div>
        <div class='col-5'>
            $email
        </div>
    </div>
    <div class='row mt-5'>
        <div class='text-start col-3'>
            Username : 
        </div>
        <div class='col-2'></div>
        <div class='col-5'>
            $username
        </div>
    </div>
    <div class='row mt-5'>
        <div class='text-start col-3'>
            Password : 
        </div>
        <div class='col-2'></div>
        <div class='col-5'>
            $password
        </div>
    </div>
    <div class='row mt-5'>
        <div class='text-start col-3'>
            offer : 
        </div>
        <div class='col-2'></div>
        <div class='col-5'>
            $offer
        </div>  </div>
    <div class='row mt-5'>
        <div class='text-start col-3'>
            num_facture : 
        </div>
        <div class='col-2'></div>
        <div class='col-5'>
            $num_facture
        </div>
    </div>
    <div class='row mt-5'>
        <div class='text-start col-3'>
            telephone : 
        </div>
        <div class='col-2'></div>
        <div class='col-5'>
            $telephone
        </div>
    </div>
</div>")
?>