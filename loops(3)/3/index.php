<?php

$cols = rand(1, 10);
$rows = rand(1, 10);

echo "<table>";

for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $cols; $j++) {
        if ($i == 1 || $j == 1) {
            echo "<td style='font-weight:bold; background-color:#ccc;'>";
        } else {
            echo "<td>";
        }
        echo $i * $j;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
