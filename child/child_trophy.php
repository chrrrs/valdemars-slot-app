<?php

  include('../assets/html_head.php');
  include('../functions.php');

  $data = getData();
  $routes = $data['app_routes'];

?>

  <div id="child-trophy-main-wrapper">
    <div id="child-trophy-wrapper" class="wrapper-flex">
      <div id="trophy-content">
        <h1>Se hvad i har vundet!</h1>
      </div>
      <?php foreach ($routes as $route): ?>
        <div class="child-trophy">
          <i class="fa fa-trophy"></i>
        </div>
      <?php endforeach; ?>

      <div class="child-trophy locked-child">
        <i class="fa fa-lock"></i>
      </div>
    </div>

    <?php

    include('../assets/footer_trophy_child.php');

    ?>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
