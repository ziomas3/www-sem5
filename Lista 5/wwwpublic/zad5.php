<?php
include "0begin.php";
?>
<h1>Strona Piąta</h1>
Poniżej  znajdzie sie rozwiązanie piatego ćwiczenia

<ul>
<?php
$x1=1;
$x2=1;
$x3;
echo "$x1, ";
echo "$x2, ";
for ($y = 3; $y <= 1000; $y++) 
	{
		$x3=$x2+$x1;
		$x1=$x2;
		$x2=$x3;
		echo "$x3, ";
	} 
  
?>
</ul>
<?php
include "0end.php";
