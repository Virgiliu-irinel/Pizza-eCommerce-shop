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
    
        $validare->validation_rules(array(
            
            'nume'            => 'required|min_len,3',
            'prenume'       => 'required|min_len,3',
            'email'       => 'required|valid_email',
            'comentariu'       => 'required|min_len, 3',
            //'hash'		    => 'token'
        ));
    
        $validated_data = $validare->run($_POST,true);
        if($validated_data !== false) {
            // $nume = strip_tags($_POST['nume']);
            
            $nume = $_POST["nume"];
            $prenume = $_POST["prenume"];
            $email = $_POST["email"];
            $comentariu = $_POST["comentariu"];
        

            $sql = "INSERT INTO comentarii (nume, prenume, email, comentariu)
            VALUES ('".$nume."', '".$prenume."', '".$email."', '".$comentariu."')";
        
            if (mysqli_query($con, $sql)) {
                echo "Datele au fost introduse cu succes!";
                header("location: contact.php");
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
            header("location: contact.php#comentariu");
        }
    }

?>