<?php

  include('../assets/html_head.php');

?>

  <div id="login-main-wrapper">
    <div id="login-wrapper" class="wrapper-flex">
      <a href="./login_options.php" class="back-button"><i class="fa fa-angle-left"></i></a>
      <h1>Login</h1>

      <form action="login_validate.php" method="post">
        <input type="text" name="username" placeholder="Brugernavn" id="signUser">
        <input type="password" name="password" placeholder="Kodeord">
        <button type="submit" name="loginSubmit" onclick="store()">Login</button>
        <a href="#">Glemt Kodeord?</a>
      </form>

      <a href="signup_email.php">
        <p>Lav en bruger <i class="fa fa-angle-right"></i></p>
      </a>
    </div>
  </div>

<?php

  include('../assets/footer_standard.php');

?>
