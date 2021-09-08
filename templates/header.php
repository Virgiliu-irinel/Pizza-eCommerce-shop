<?php
if (!isset($_SESSION)) {
  session_start();
}
?>




<header>
    <div>
        <img style="display:block; margin-right: auto; margin-left: auto;" src="assets/banner_text1.png">
    </div>
    

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#ebedef">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="assets/logobun.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a <?=returnActiveClassIfRequestMatches("index")?> aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a <?=returnActiveClassIfRequestMatches("meniu")?> href="meniu.php">Meniu</a>
              </li>
              <li class="nav-item">
                <a <?=returnActiveClassIfRequestMatches("despre_noi")?> href="despre_noi.php">Despre noi</a>
              </li>
              <li class="nav-item">
                <a <?=returnActiveClassIfRequestMatches("contact")?> href="contact.php" tabindex="-1">Contact</a>
              </li>
              <?php if (isset($_SESSION['admin_session']) && $_SESSION['admin_session']===true):?>
                <li class="nav-item">
                  <a <?=returnActiveClassIfRequestMatches("logout")?> href="logout.php">Logout</a>
                </li>
                <li>
                  <a <?=returnActiveClassIfRequestMatches("user")?> href="user.php">User</a>
                </li>
                <li class="nav-item">
                  <a <?=returnActiveClassIfRequestMatches("comenzi")?> href="comenzi.php">Comenzi</a>
                </li>
                <li class="nav-item">
                  <a <?=returnActiveClassIfRequestMatches("feedback")?> href="feedback.php">Feedback</a>
                </li>
              <?php else:?>
                <li class="nav-item">
                  <a <?=returnActiveClassIfRequestMatches("login")?> href="login.php">Login</a>
                </li>
              <?php endif;?>
            </ul>
          </div>
        </div>
      </nav>
</header>

<?php 

  function returnActiveClassIfRequestMatches($requestUri)
  {
      $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

      if ($current_file_name == $requestUri){
        return 'class="nav-link active"';
      }
      else{
        return 'class="nav-link"';
      }

  }

?>