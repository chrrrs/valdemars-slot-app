<?php

  include('../functions.php');

  parse_str($_SERVER['QUERY_STRING'], $qs);
  $routeId = $qs['route'];
  $questionId = $qs['question'];
  $answerId = $qs['answer'];
  $data = getData();

  $routes = $data['app_routes'];

  $route = null;
  $question = null;

  foreach($routes as $struct) {
    if($struct['id'] == $routeId) {
      $route = $struct;
      break;
    }
  }

  $questions = $route['questions'];
  foreach($questions as $struct) {
    if($struct['id'] == $questionId) {
      $question = $struct;
      break;
    }
  }


  if($answerId == $question['answer']) {
    $location = 'question.php?route=' . $route['id'];
    header('Location: ' . $location);
  } 



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php echo print_r($qs); ?>
  </body>
</html>
