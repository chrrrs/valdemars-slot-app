<?php

  include('../functions.php');
  include('../assets/html_head.php');

  parse_str($_SERVER['QUERY_STRING'], $qs);
  $routeId = $qs['route'];
  $questionId = null;
  if(in_array('question', $qs)){
    $questionId = $qs['question'];
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

  foreach($questions as $struct) {
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
    else if($struct['id'] == $questionId) {
      $question = $struct;
      break;
    }
  }

?>

  <div id="questions-main-wrapper">
    <div id="question-wrapper" class="wrapper-flex">
      <!-- <progress value="8.33" max="100">8.33%</progress> -->

      <div id="card">
        <!-- current cards number contra amount of cards -->
        <span id="card-count">1/12</span>
        <!-- content/question of card -->
        <p><?php echo $question['content']; ?></p>
        <!-- answers to card -->
        <form action="question_validate.php" method="post">
          <?php foreach ($question['options'] as $i => $answer): ?>

            <a href="question_validate.php?route=<?php echo $route['id']; ?>&question=<?php echo $question['id']; ?>&answer=<?php echo $answer['id'];?>"><?php echo $answer['answer']; ?></a>

          <?php endforeach; ?>
        </form>
      </div>

      <div id="clue-container">
        <i class="fa fa-lightbulb-o"></i>
        <p>ledetråd</p>
      </div>
    </div>
    <?php

    include('../assets/footer_app_child.php');

    ?>
  </div>
<?php

  include('../assets/footer_standard.php');

?>
