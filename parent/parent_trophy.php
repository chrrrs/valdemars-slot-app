<?php

  include('../assets/html_head.php');
  include('../functions.php');

  $user = getUser();
  $routes = $user[0]['routes'];

?>

  <div id="parent-trophy-main-wrapper">
    <div id="parent-trophy-wrapper">
      <?php foreach ($routes as $i => $route): ?>
      <div class="parent-trophy-container">
        <span><i>0%</i></span>
        <div class="parent-trophy-content">
          <h3><?php echo $route['title']; ?></h3>
          <p><?php echo $route['description']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>

    </div>
    <?php

    include('../assets/footer_trophy_parent.php');

    ?>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
