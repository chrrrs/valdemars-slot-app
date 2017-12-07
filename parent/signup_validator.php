<?php

  include('../assets/html_head.php');
  include('../functions.php');

  if(isset($_POST['signupEmail']) && isset($_POST['signupUsername']) && isset($_POST['signupPassword'])) {
    createUser();
    header('Location: map_viewer.php');
		exit;
  }

?>
