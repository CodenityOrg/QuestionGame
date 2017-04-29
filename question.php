<?php include 'questions.php';   ?>
<!DOCTYPE html>
<html>
  <?php include 'include/head.php'; ?>
  <body>

    <div class="container">
        <?php include 'include/navbar.php';   ?>

        <div class="questionary">
          <form id="question-form" method="post" action="verification_answer.php">
            <input type="hidden" id = "question_id" name="question_id" value=<?= $question["id"]; ?>>
            <h1 class="title" align="center"> <?= $question["title"]; ?></h1>
            <p class="label">Options:</p>
            <br>

          	<?php foreach ($options as $option): ?>
                <div class="option">
                  <input type='radio' id='option_id' name='option_id'  value=" <?= $option["id"] ?>"> <?= $option["title"]; ?>
                </div>
          	<?php endforeach; ?>

            <br><br>
            <div class="response">
                <input class="btn btn-large" type="submit" name="submit" value="Verificar">
            </div>
          </form>
        </div>
    </div>

    <?php include 'include/scripts.php'; ?>

    <script type="text/javascript">
      questionForm();	
    </script>

  </body>
</html>
