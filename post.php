<?php

    if (!isset($_SESSION)) {
    session_start();
    }

    include_once("connect.php");
    include_once("classes/validation.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field

        $validare = new Validation('ro');
        $_POST = $validare->sanitize($_POST);

        if (isset($_POST["Pizza"]) && !empty($_POST["Pizza"])){
            $_POST["Pizza"] = implode(" ", $_POST["Pizza"]);
        }
        else{
            echo "Nu ai introdus Pizza";
        }

        // echo "<pre>";
        // print_r($_POST);
        // validare custom hash :  CSRF token
        // Validation::add_validator(
        //     'token', 
        //     function($field, $input, $param = NULL) {
        //         return $input[$field]===$_SESSION['token'];
        //     },
        //     'Date incorecte atentie!'
        // );
        $validare->validation_rules(array(
            
            'Pizza'            => 'required|min_len,3',
            'Preferinte'       => 'min_len,3',
            'Nume'       => 'required|min_len,3',
            'Prenume'       => 'required|min_len,3',
            'Email'         => 'required|valid_email',
            'Numar_de_telefon'  => 'required|exact_len,10|numeric',
            'Adresa'       => 'required',
            'Pret_total'       => 'required|max_len,10|numeric'
            //'hash'		    => 'token'
        ));
    
        $validated_data = $validare->run($_POST,true);
        if($validated_data !== false) {
            // $nume = strip_tags($_POST['nume']);
            
            $pizza = $_POST["Pizza"];
            $preferinte = $_POST["Preferinte"];
            $nume = $_POST["Nume"];
            $prenume = $_POST["Prenume"];
            $numar_de_telefon = $_POST["Numar_de_telefon"];
            $email = $_POST["Email"];
            $adresa= $_POST["Adresa"];
            $pret_total = $_POST["Pret_total"];
        

            $sql = "INSERT INTO comenzi (nume, prenume, numar_de_telefon, email, adresa, pizza, preferinte, pret_total)
            VALUES ('".$nume."', '".$prenume."', '".$numar_de_telefon."', '".$email."', '".$adresa."', '".$pizza."', '".$preferinte."', '".$pret_total."')";
        
            if (mysqli_query($con, $sql)) {
                echo "Datele au fost introduse cu succes!";
                header("location: meniu.php");
                unset($_SESSION["errors_msg"]);
                $db_eroare = false;
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($con);
            }
            
            mysqli_close($con);
        }
        else{
            $errorMSG = " ";
		    $errors= $validare->get_readable_errors();
		    foreach( $errors as $e){
		        $errorMSG .= "<li>$e</li>";
		    }
		    $_SESSION['errors_msg'] = $errorMSG;
            header("location: meniu.php#order");
        }
    }
?>