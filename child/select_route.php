<?php

  include('../assets/html_head.php');
  include('../functions.php');

  $userData = getUser();
  $users = $userData[0]['routes'];
?>

  <div id="select-main-wrapper">
    <div id="select-wrapper">
        <?php foreach ($users as $i => $user): ?>
          <?php include('../assets/card.php'); ?>
        <?php endforeach; ?>
    </div>
    <?php

    include('../assets/footer_app_child.php');

    ?>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
