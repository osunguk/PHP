<?php
require_once('lib/print.php');
?>
<!DOCTYPE html>
<meta charset="utf-8">
<html>
  <head>
    <title><?php print_title(); ?></title>
  </head>

  <body>
    <h1><a href="_index.php"> WEB!! </a></h1>
    <ol>
      <?php
      print_datalist();
      ?>
    </ol>
