<?php

$jml = $_GET['jml'];
echo "<table border=1>\n";

for ($a = $jml; $a > 0; $a--) {
    $rowTotal = 0;
    echo "<tr>\n";
    for ($b = $a; $b > 0; $b--) {
        echo "<td width='30px'>$b</td>";
        $rowTotal += $b;
    }
    echo "<tr><td colspan=5>Total: $rowTotal </td></tr>";
    echo "</tr>\n";
}
echo "</table>";
