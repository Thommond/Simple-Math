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

        <form class="" action="index.php" method="post" id='answer'>

          <label for="num_1"> First Number

            <p>
              <input type="text" name="num_1" value=<?php if (isset($_POST['press'])) echo $num_1; ?>>
            </p>

          </label>

          <label for="num_2"> Second Number

            <p>
              <input type="text" name="num_2" value=<?php if (isset($_POST['press'])) echo $num_2; ?>>
            </p>

          </label>
          <p>
            <select class="" name="operation" form='answer'>
              <option value="addition">+</option>
              <option value="subtraction">-</option>
              <option value="division">/</option>
              <option value="multiplication">*</option>
            </select>
         </p>

          <label for="answer"> Guess

            <p>
              <input type="text" name="guess" >
            </p>

          </label>

          <input type="submit" name="submit" value="Submit">

        </form>

    </section>


    <section class='result'>

    </section>

  </body>
</html>
