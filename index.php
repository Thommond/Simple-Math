<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>Number Game</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>

    <section>

      <form class="" action="index.php" method="post">

        <p>

          <label for="range_1_num1">Number range for number 1

          <input type="text" name="range_1_num1">

          <input type="text" name="range_1_num2">

          </label>

        </p>

        <p>

          <label for="range_1_num1">Number range for number 2

          <input type="text" name="range_2_num1">

          <input type="text" name="range_2_num2">

          </label>

        </p>

        <label for="press">Roll the dice

        <input type="submit" name="press" value="Submit">

        </label>

      </form>

      <?php

      if (isset($_POST['press'])) {

      $range_1_num1 = $_POST['range_1_num1'];
      $range_1_num2 = $_POST['range_1_num2'];
      $range_2_num1 = $_POST['range_2_num1'];
      $range_2_num2 = $_POST['range_2_num2'];

      $num_1 = mt_rand($range_1_num1, $range_1_num2);
      $num_2 = mt_rand($range_2_num1, $range_2_num2);

      }
      ?>

      <section>


    <section>

    </section>

    <section class='result'>

    </section>

  </body>
</html>
