<?php

  include('../assets/html_head.php');

?>

  <div id="login-options-main-wrapper">
    <div id="login-options-wrapper" class="wrapper-flex">
      <a href="../index.php" class="back-button"><i class="fa fa-angle-left"></i></a>
      <h1>Login</h1>
      <div id="login-facebook" class="login-unavailable">
        <a href="#">Login med Facebook</a>
        <i class="fa fa-facebook-square"></i>
      </div>
      <div id="login-google" class="login-unavailable">
        <a href="#">Login med Google+</a>
        <i class="fa fa-google-plus"></i>
      </div>
      <div id="login-email">
        <a href="./login_email.php">Login med email</a>
        <i class="fa fa-envelope-o"></i>
      </div>

    </div>

    <div id="unavailableModal">
      <div id="unavailableModal-content">
        <span class="close">&times;</span>
        <p>Denne handling er i øjeblikket utilgængelig, prøv en af de andre muligheder.</p>
      </div>
    </div>

  </div>

<?php

  include('../assets/footer_standard.php');

?>
