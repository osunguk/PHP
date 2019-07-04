<!doctype html>
<meta charset="utf-8">
<html>
  <head>
  </head>

  <body>
    <h1>Function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet, consectetur
    adipisicing elit, sed do eiusmod tempor incididunt
    ut labore et dolore magna aliqua.";
    echo $str;
     ?>
     <h2>strlen()</h2>
     <?php
    echo strlen($str);
      ?>
    <h2>nl2br()</h2>
    <?php
    echo nl2br($str);
     ?>
  </body>
</html>
