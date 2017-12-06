<?php

  include('../functions.php');
  include('../assets/html_head.php');

  $user = getUser();
?>

  <div id="map-viewer-main-wrapper">
    <div id="map-viewer-wrapper" class="wrapper-flex">
      <div id="host-code-container">
        <label class="switch">
          <input type="checkbox">
          <span class="slider round"></span>
        </label>
        <div id="code-container">
          <p><?php echo $user[0]['code']; ?></p>
        </div>
      </div>

      <div id="map-selection-container">
        <input type="range" name="mapWheel" min="0" max="4" value="1" id="mapSlider">
        <div id="map-container">
          <img src="../assets/images/basement.svg" alt="Kælder etage">
          <img src="../assets/images/ground_floor.svg" alt="Stue etage" style="display: none;">
          <img src="../assets/images/first_floor.svg" alt="Første etage" style="display: none;">
          <img src="../assets/images/second_floor.svg" alt="Anden etage" style="display: none;">
        </div>
      </div>


      <?php

      include('../assets/footer_app_parent.php');

      ?>
    </div>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
