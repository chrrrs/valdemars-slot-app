<?php

  include('../assets/html_head.php');

?>

  <div id="login-main-wrapper">
    <div id="login-wrapper" class="wrapper-flex">
      <h1>Login</h1>

      <form action="index.html" method="post">
        <input type="text" name="username" placeholder="Brugernavn">
        <input type="password" name="password" placeholder="Kodeord">
        <button type="submit" name="loginSubmit">Login</button>
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
