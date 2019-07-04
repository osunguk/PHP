<?php
function print_title(){
  if (isset($_GET['id'])){
    echo $_GET['id'];
  }
  else {
    echo "Welcome";
  }
}

function print_description(){
  if (isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  }
  else {
    echo "Hello PHP";
  }
}

function print_datalist(){
  $a = scandir('data/');
  $cnt = 0;
  while ($cnt < count($a)) {
    if($a[$cnt] == '.' or $a[$cnt] == '..'){
    }
    else {
      echo "<li><a href=\"_index.php?id=$a[$cnt]\">$a[$cnt]</a></li>";
    }
    $cnt++;
  }
}
?>
