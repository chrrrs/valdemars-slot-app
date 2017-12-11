<?php

  include('../assets/html_head.php');
  include('../functions.php');

  $data = getData();
  $routes = $data['app_routes'];

?>

  <div id="parent-trophy-main-wrapper">
    <div id="parent-trophy-wrapper">
      <?php foreach ($routes as $route): ?>
      <div class="parent-trophy-container">
        <span><i class="fa fa-trophy"></i></span>
        <div class="parent-trophy-content">
          <h3><?php echo $route['title']; ?></h3>
          <p><?php echo $route['description']; ?></p>
        </div>
      </div>
      <?php endforeach; ?>

      <div class="parent-trophy-container">
        <span id="parent-locked"><i class="fa fa-lock"></i></span>
        <div class="parent-trophy-content">
          <h3>Jule Ruten</h3>
          <p>Denne rute vil være åben mellem den <i>1. december og 11. december.</i></p>
        </div>
      </div>
    </div>
    <?php

    include('../assets/footer_trophy_parent.php');

    ?>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
