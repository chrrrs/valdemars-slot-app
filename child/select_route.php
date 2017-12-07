<?php

  include('../assets/html_head.php');
  include('../functions.php');

  $users = getUser();

?>

  <div id="select-main-wrapper">
    <div id="select-wrapper">
      <ul id="front-cards">
        <?php foreach ($users as $i => $user): ?>
        <li><?php include('../assets/card.php'); ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
    <?php

    include('../assets/footer_app_child.php');

    ?>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
