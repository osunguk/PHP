<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>function</h1>
    <h2>basic</h2>
    <?php
    function basic(){
      print("Lorem ipsum dolor1<br>");
      print("Lorem ipsum dolor2<br>");
    }
    basic();
    echo "string";
    ?>

    <h2>parameter & argument</h2>
    <?php
    function sum($left,$right){
      return $left+$right.'<br>';
    }
    echo sum(4,6);
    echo sum(4,6);
    echo sum(4,6);
     ?>
  </body>
</html>
