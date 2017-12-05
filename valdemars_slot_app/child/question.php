<?php

  include('../functions.php');
  include('../assets/html_head.php');

  $card = getData();
?>

  <div id="questions-main-wrapper">
    <div id="question-wrapper" class="wrapper-flex">
      <progress value="8.33" max="100">8.33%</progress>

      <?php echo print_r($card['route_1']['question_1']['answer'][0]['answerContent']); ?>

      <div id="card">
        <!-- current cards number contra amount of cards -->
        <span id="card-count">1/12</span>
        <!-- content/question of card -->
        <p><?php echo $card['route_1']['question_1']['content']; ?></p>
        <!-- answers to card -->
        <form action="index.html" method="post">
          <button type="submit" name="button">
            <?php echo $card['route_1']['question_1']['answer'][0]['answerContent']; ?>
          </button>
          <button type="submit" name="button">
            <?php echo $card['route_1']['question_1']['answer']['answer_2']; ?>
          </button>
          <button type="submit" name="button">
            <?php echo $card['route_1']['question_1']['answer']['answer_3']; ?>
          </button>
          <button type="submit" name="button">
            <?php echo $card['route_1']['question_1']['answer']['answer_4']; ?>
          </button>
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
