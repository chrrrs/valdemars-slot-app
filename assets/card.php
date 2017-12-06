<div id="card">
  <!-- current cards number contra amount of cards -->
  <span id="card-count">1/12</span>
  <!-- content/question of card -->
  <p><?php echo $card['route_1']['question_1']['content']; ?></p>
  <!-- answers to card -->
  <form action="<?php echo 'question.php?r='. $r . '&q=' . $q; ?>" method="post">
    <button type="submit" name="answer_1">
      <?php echo $card['route_1']['question_1']['options'][0]; ?>
    </button>
    <button type="submit" name="answer_2">
      <?php echo $card['route_1']['question_1']['options'][1]; ?>
    </button>
    <button type="submit" name="answer_3">
      <?php echo $card['route_1']['question_1']['options'][2]; ?>
    </button>
    <button type="submit" name="answer_4">
      <?php echo $card['route_1']['question_1']['options'][3]; ?>
    </button>
  </form>
</div>

<div id="clue-container">
  <i class="fa fa-lightbulb-o"></i>
  <p>ledetråd</p>
</div>
