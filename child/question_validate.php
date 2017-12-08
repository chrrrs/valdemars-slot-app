<?php

  include('../functions.php');

  $answer = getUser();

  if($_POST[0] === $answer['routes'][0]['question'][0]['answer']) {
    header('Location: child_trophy.php');
  } else if ($_POST[1] === $answer['routes'][0]['question'][0]['answer']) {
    header('Location: connect.php');
  } else if ($_POST[2] === $answer['routes'][0]['question'][0]['answer']) {
    header('Location: select_route.php');
  } else if ($_POST[3] === $answer['routes'][0]['question'][0]['answer']) {
    header('Location: victory.php');
  } else {
    header('Location: question.php');
  }

?>
