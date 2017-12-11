<?php

  include('../assets/html_head.php');

?>

  <div id="signup-main-wrapper">
    <div id="signup-wrapper" class="wrapper-flex">
      <a href="login_email.php" class="back-button"><i class="fa fa-angle-left"></i></a>
      <h1>Lav en bruger</h1>

      <form action="signup_validator.php" method="post">
        <input id="signEmail" type="email" name="signupEmail" placeholder="email">
        <input id="signUser" type="text" name="signupUsername" placeholder="Brugernavn">
        <input type="password" name="signupPassword" placeholder="Kodeord">
        <input type="password" name="signupPasswordValid" placeholder="Gentag kodeord">
        <button type="submit" name="signupButton" onclick="store()">Lav bruger</button>
        <div>
          <input type="checkbox" name="signupRadioBtn">
          <label for="signupRadioBtn">Brugerbetingelser</label>
        </div>
      </form>
    </div>
  </div>

<?php

  include('../assets/footer_standard.php');

?>
