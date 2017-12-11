<?php

  include('../assets/html_head.php');
  include('../functions.php');


?>

  <div id="connect-main-wrapper">
    <div id="connect-wrapper" class="wrapper-flex">
      <a href="../index.php" class="back-button"><i class="fa fa-angle-left"></i></a>
      <h1>Brug koden fra din forælder</h1>
      <form action="connecting.php" method="post">
        <input type="text" name="connectCode" placeholder="Indsæt koden fra din forælder" id="signUser">
        <button type="submit" name="connectBtn" onclick="store()">Forbind</button>
      </form>
    </div>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
