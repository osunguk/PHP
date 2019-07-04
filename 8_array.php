<!doctype html>

<html>
  <head>
    <meta charset="utf-8">
  </head>

  <body>
    <h1>array</h1>
    <?php
    $Ary = array('a','b','c','d','e','f');
    echo $Ary[1].'<br>';
    echo count($Ary); //요소 갯수 출력
    array_push($Ary,'g','h');
    var_dump($Ary);
    ?>
  </body>
</html>
