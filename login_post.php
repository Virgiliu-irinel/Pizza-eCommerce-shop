<?php 
if (!isset($_SESSION)) {
    session_start();
}

    $username = "";
    $parola = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["user"];
        $parola = $_POST["password"];
    }

    if ($username == "admin" && $parola == "1234"){
        $_SESSION['admin_session'] = true;

        header("Location: user.php");
    }
    else{
        echo "User sau parola incorecta!";
    }

?>