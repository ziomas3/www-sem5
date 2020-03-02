<?php
include "0begin.php";
?>
<h1>Strona trzecia</h1>
Poniżej  znajdzie sie rozwiązanie trzeciego ćwiczenia

<ul>
<?php

  $filmy=scandir('movies');

  foreach($filmy as $x)

  if($x[0]!='.')
     echo "<video width='320' height='240' controls>
  <source src='movies/$x' type='video/mp4'>
Your browser does not support the video tag.
</video>"; 
?>
</ul>
<?php
include "0end.php";
