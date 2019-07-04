<?php
require_once('lib/print.php');
require_once('view/top.php');
?>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
      <p><input type="text" placeholder="Title" name="title"></p>
      <p><textarea placeholder="Description" name="description"></textarea></p>
      <p><input type="submit"></p>
    </form>
<?php
require_once('view/bottom.php');
?>
