<?php
echo "<table width= '270px' cellspacing='0px' cellpadding='0px' border='1'>";

for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 8; $col++) {
        if (($row + $col) % 2 == 0) {
            echo "<td style='width:30px; height:30px; background-color:black;'></td>";
        } else {
            echo "<td style='width:30px; height:30px; background-color:white;'></td>";
        }
    }
    echo "</tr>";
}

echo "</tables>";
?>