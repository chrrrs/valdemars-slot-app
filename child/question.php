<?php

  include('../functions.php');
  include('../assets/html_head.php');

  parse_str($_SERVER['QUERY_STRING'], $qs);
  $routeId = $qs['route'];
  $questionId = null;
  if(in_array('question', $qs)){
    $questionId = $qs['question'];
  }

  $error = false;

  if (isset($qs['error'])) {
    $error = $qs['error'];
  }

  $userData = getUser();
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
  $userQuestions = null;
  if($questionId == null) {
    $userRoutes = $userData['routes'];
    foreach($userRoutes as $userRoute) {
      if($userRoute['id'] == $route['id']) {
        $userQuestions = $userRoute['questions'];
      }
    }
  }

  foreach($questions as $i => $struct) {
    if($userQuestions != null)
    {
      $containsQuestion = false;
      foreach($userQuestions as $userQuestion) {
        if($userQuestion['id'] == $struct['id']) {
          $containsQuestion = true;
        }
      }
      if(!$containsQuestion)
      {
        $question = $struct;
        break;
      }
    }
    else if ($questionId == null) {
      $question = $struct;
      break;
    }
    else if($struct['id'] == $questionId) {
      $question = $struct;
      break;
    }
    if($i == count($questions)-1) {
      header('Location: victory.php');
    }
  }



?>

  <div id="questions-main-wrapper">
    <div id="question-wrapper" class="wrapper-flex">
      <!-- <progress value="8.33" max="100">8.33%</progress> -->

      <div id="card">
        <!-- current cards number contra amount of cards -->
        <span id="card-fail"><?php if($error == true){ echo 'forkert svar, prøv igen'; } ?></span>
        <!-- content/question of card -->
        <p><?php echo $question['content']; ?></p>
        <!-- answers to card -->
        <div>
          <?php foreach ($question['options'] as $answer): ?>

            <a href="question_validate.php?route=<?php echo $route['id']; ?>&question=<?php echo $question['id']; ?>&answer=<?php echo $answer['id'];?>"><?php echo $answer['answer']; ?></a>

          <?php endforeach; ?>
        </div>
      </div>

      <div id="clue-container">
        <i class="fa fa-lightbulb-o"></i>
        <p>ledetråd</p>
      </div>
    </div>
    <?php

    include('../assets/footer_trophy_child.php');

    ?>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
