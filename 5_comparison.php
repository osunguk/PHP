<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>

  <body>
    <?php
    $string="한국의 수도는 서울이다.\n 서울은 우리집에서 멀다.";
    echo $string;
    $nl2br=nl2br($string);

    echo $nl2br;
    ?>
    <h1>Comparionn Operators &amp; Boolean data type !</h1>
    <?php
      var_dump('1');
      echo '<br>';
      var_dump(1);
      echo '<br>';
      var_dump(1.1);
      echo '<br>';
      var_dump(1==1);
      echo '<br>';
      var_dump(1==11);
     ?>
  </body>
</html>
