<?php

  include('../functions.php');

  $userCode = getUser();
  $connectCode = $_POST['connectCode'];

  if($connectCode === $userCode) {
    header('Location: question.php');
  }

?>
