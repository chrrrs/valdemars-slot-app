<?php

  include('../assets/html_head.php');

?>

  <div id="signup-main-wrapper">
    <div id="signup-wrapper" class="wrapper-flex">
      <h1>Lav en bruger</h1>

      <form action="signup_validator.php" method="post">
        <input type="email" name="signupEmail" placeholder="email">
        <input type="text" name="signupUsername" placeholder="Brugernavn">
        <input type="password" name="signupPassword" placeholder="Kodeord">
        <input type="password" name="signupPasswordValid" placeholder="Gentag kodeord">
        <button type="submit" name="signupButton">Lav bruger</button>
        <div>
          <input type="checkbox" name="signupRadioBtn">
          <label for="signupRadioBtn">hello</label>
        </div>
      </form>
    </div>
  </div>

<?php

  include('../assets/footer_standard.php');

?>
