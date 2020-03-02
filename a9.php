<?php
include "0begin.php";

$nick=$_POST["nick"];
isset($nick) or $nick=$_GET["nick"];
$msg=$_POST["msg"];

?>
<h1>Czat</h1>

<form method=post>
Nick:<input name="nick" value=<?=$nick?> ><br>
Msg:<input name="msg"><br>
<input type="submit">
</form>

<script>document.querySelectorAll("input")[<?= 0+isset($nick)?> ].focus()</script>
<?php

$txt=file_get_contents("czat.txt");

if( !empty($nick) and !empty($msg) )
	file_put_contents("czat.txt","<div><b>$nick</b>: $msg</div>\n".$txt);


include "czat.txt";

?>
<?php
include "0end.php";
