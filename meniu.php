<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="ro">
    <head>
        <title>Meniu</title>
        <?php include("templates/head.html") ?>
    </head>

    <body>
        
        <div class="container-md main">
            <?php include("array.php") ?>
            <?php include("templates/header.php") ?>
            <?php include("templates/meniu_content.php") ?>
        </div>

        <?php include("templates/footer.html") ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>