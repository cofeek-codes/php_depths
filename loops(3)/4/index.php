<?php
echo "<table width='270px' border='1'>";
for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    for ($col = 1; $col <= 8; $col++) {
        if (($row + $col) % 2 == 0) {
            echo "<td width='30px' height='30px' style='background-color: #FFFFFF;'></td>";
        } else {
            echo "<td width='30px' height='30px' style='background-color: #000000;'></td>";
        }
    }
    echo "</tr>";
}
echo "</table>";
