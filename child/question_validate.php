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

    $userData = getUser();
    $userQuestions = null;
    $hasFoundUserRoute = false;
    $hasFoundUserQuestion = false;

    $userRoutes = $userData['routes'];
    foreach($userData['routes'] as $i => $userRoute) {
      if($userRoute['id'] == $route['id']) {
        $userQuestions = $userRoute['questions'];

        $hasFoundUserRoute = true;

        foreach($userQuestions as $userQuestion) {
          if($userQuestion['id'] == $question['id']) {
            $userQuestions['isAnswered'] = true;

            $hasFoundUserQuestion = true;
          }
        }
        if(!$hasFoundUserQuestion) {
          $newQuestion = (object)["id" => $question['id'], "isAnswered" => true, "answer" => $answerId];
          array_push($userData['routes'][$i]['questions'], $newQuestion);
          $users[] = $userData;
          putUser($users);
        }
      }
    }

    if(!$hasFoundUserRoute) {

      $newQuestion = (object)["id" => $question['id'], "isAnswered" => true, "answer" => $answerId];
      $newRoute = (object)["id" => $route['id'], "questions"=> [$newQuestion]];

      array_push($userData['routes'], $newRoute);
      $users[] = $userData;
      putUser($users);
    }



    $location = 'question.php?route=' . $route['id'];
    if($question['isFinal']) {
      $location = 'victory.php';
    }
    header('Location: ' . $location);
  } else {
    $location = 'question.php?route=' . $route['id'] . '&error=true';
    header('Location: ' . $location);
  }



?>
