<?php
include "0begin.php";
?>
<h1>Strona szósta</h1>
Poniżej  znajdzie sie rozwiązanie czwartego ćwiczenia
<h2> Tabliczka mnożenia </h2>
<a href="?n=10"> do 10 </a>
<a href="?n=20"> do 20 </a>
<a href="?n=30"> do 30 </a>.
<table>
<?php
$n=$_GET["n"];
if(!isset($n)) $n=20;

for ($i = 1; $i <= $n; $i++) 
{
    echo "<tr>";
    for ($j = 1; $j <= $n; $j++) 
    {
        $x=$j*$i;
    echo "<td>$x <td>";
    } 
    echo "</tr>";
}
  
?>
</table>
<?php
include "0end.php";
