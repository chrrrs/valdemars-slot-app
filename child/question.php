<?php

  include('../functions.php');
  include('../assets/html_head.php');

  $questions = getUser();



?>

  <div id="questions-main-wrapper">
    <div id="question-wrapper" class="wrapper-flex">
      <progress value="8.33" max="100">8.33%</progress>

      <?php foreach ($questions as $i => $question): ?>
      <div id="card">
        <!-- current cards number contra amount of cards -->
        <span id="card-count">1/12</span>
        <!-- content/question of card -->
        <p><?php echo $question['routes'][0]['question'][$i]['content']; ?></p>
        <!-- answers to card -->
        <form action="" method="post">
          <button type="submit" name="answer_1">
            <?php echo $question['routes'][0]['question'][$i]['options'][0]; ?>
          </button>
          <button type="submit" name="answer_2">
            <?php echo $question['routes'][0]['question'][$i]['options'][1]; ?>
          </button>
          <button type="submit" name="answer_3">
            <?php echo $question['routes'][0]['question'][$i]['options'][2]; ?>
          </button>
          <button type="submit" name="answer_4">
            <?php echo $question['routes'][0]['question'][$i]['options'][3]; ?>
          </button>
        </form>
      </div>

      <div id="clue-container">
        <i class="fa fa-lightbulb-o"></i>
        <p>ledetråd</p>
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
