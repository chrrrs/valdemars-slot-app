<?php

  include('../assets/html_head.php');
  include('../functions.php');


  $data = getData();
  $routes = $data['app_routes'];
?>

  <div id="select-main-wrapper">
    <div id="select-wrapper">
        <?php foreach ($routes as $route): ?>
          <div id="route-card">
            <a href="question.php?route=<?php echo $route['id']; ?>">
              <h3><?php echo $route['title']; ?></h3>
              <p><?php echo $route['description']; ?></p>
            </a>
          </div>
        <?php endforeach; ?>
    </div>
    <?php

    include('../assets/footer_app_child.php');

    ?>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
