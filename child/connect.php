<?php

  include('../assets/html_head.php');
  include('../functions.php');


?>

  <div id="connect-main-wrapper">
    <div id="connect-wrapper" class="wrapper-flex">
      <h1>Brug koden fra din forælder</h1>
      <form action="<?php echo 'question.php?r='. $r . '&q=' . $q; ?>" method="post">
        <input type="text" name="connectCode" placeholder="Indsæt koden fra din forælder">
        <button type="submit" name="connectBtn">Forbind</button>
      </form>
    </div>
  </div>
<?php

  include('../assets/footer_standard.php');

?>