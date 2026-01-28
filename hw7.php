<?php
echo "<table border='1' cellpadding='5' cellspacing='0'>";

for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 10; $col++) {
        echo "<td>" . ($row * $col) . "</td>";
    }

    echo "</tr>";
}

echo "</tables>";
?>