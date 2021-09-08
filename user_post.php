<?php 
    include_once("connect.php");

    
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $tip_pizza = $_POST["tip_pizza"];
        $pret = $_POST["pret"];
        $poza = $_POST["poza"];
    

        $sql = "INSERT INTO meniu (tip_pizza, pret, poza)
            VALUES ('".$tip_pizza."', '".$pret."', '".$poza."')";
        
        if (mysqli_query($con, $sql)){
            echo "Datele au fost introduse corect!";
            header("location: meniu.php");
            $db_eroare = false;
        }
        else {
            echo "Eroare: " . $sql .  "<br>" . mysqli_error($con);
        }
        
        mysqli_close($con);
    }
?>