<?php
$max = 5;    //stars at the widest point

//going upwards
for($i = 1; $i <= $max; $i++) {
    for($s = 1; $s <= $max - $i; $s++) {
        echo "  ";
    }
    for($star = 1; $star <= $i; $star++) {
        echo "* ";
    }
    echo "<br>";
}

//going downwards
for($i = $max-1; $i >= 1; $i--) {

  for($s = 1; $s == $max - $i; $s++) {
    echo "  ";
  }

  for($star = 1; $star <= $i; $star++) {
    echo "* ";
  }
  echo "<br>";
}
?>