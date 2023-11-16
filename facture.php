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
        if ($offer == 'basic'){
            $montant = "65 DH";
        } else if ($offer = "standard"){
            $montant = "95 DH";
        }else{
            $montant = "125 DH";
        }
        $nb = rand(1, 2);
        if ($nb == 1){
            $color = "success";
            $text = "payant";
        }else{
            $color = "danger";
            $text = "pas en cour payant";
        }
    }
    exit("<div id='main4' class='bg-white text-center rounded col-4 pb-5'>
    <div class='bg-white text-center rounded'>
    <h2 class'h2'>Facture N° $num_facture</h2>
    <i class='mt-3 far fa-user fa-5x'></i>
    <ul style='list-style:none' class='mt-5 text-start'>
        <li style='font-weight:bolder'>Email : $email<span></span></li>
        <li style='font-weight:bolder'>Username : $username<span></span></li>
        <li style='font-weight:bolder'>Password : $password<span></span></li>
        <li style='font-weight:bolder'>Telephone : $telephone<span></span></li>
        <li style='font-weight:bolder'>Offer : $offer<span></span></li>
        <li style='font-weight:bolder'>Num Facteur : $num_facture<span></span></li>
        <li class='text-center bg-dark text-white p-3 m-2 border rounded'>MONTANT : $montant</li>
    </ul>
    <button id='edit' type='button' class='btn btn-outline-$color pe-5 ps-5 mb-3'>$text</button>
</div>
<button style='width:fit-content' type='button' class='btn btn-warning mt-4'>Imprimer</button>
</div>")
?>