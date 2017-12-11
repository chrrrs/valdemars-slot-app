<?php

  include('../functions.php');

  $userCode = getUser();
  $connectCode = $_POST['connectCode'];

  if($connectCode === $userCode['code']) {
    header('Location: select_route.php');
  } else {
    header('Location: connect.php');
  }

?>
