<?php
if (!isset($_SESSION)) {
    session_start();
}

 if (isset($_SESSION['admin_session']) && $_SESSION['admin_session']===true){
     unset($_SESSION['admin_session']);
 }

 $_SESSION['admin_session'] = false;
 header("location: index.php");
 
 
 
 ?>