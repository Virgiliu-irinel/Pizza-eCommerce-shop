<?php
    include_once("connect.php");

    $res = mysqli_query($con, "SELECT tip_pizza, pret, poza FROM meniu");
    $res1 = mysqli_query($con, "SELECT id, nume, prenume, numar_de_telefon, email, adresa, pizza, preferinte, pret_total FROM comenzi");
    $res2 = mysqli_query($con, "SELECT nume, prenume, comentariu FROM comentarii");
    
    $pizza_menu = [];
    $comenzi = [];
    $feedback = [];

    while ($row_meniu = mysqli_fetch_assoc($res)){
        $pizza_menu[] = $row_meniu;
    }

    while ($row_comenzi = mysqli_fetch_assoc($res1)){
        $comenzi[] = $row_comenzi;
    }

    while ($row_comentarii = mysqli_fetch_assoc($res2)){
        $feedback[] = $row_comentarii;
    }

    $date_contact = ["Nr de telefon"=>"0712345678", "Adresa"=>"Bucuresti", "Email"=>"pizzavirgil@example.com"]

?>