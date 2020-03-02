<?php
include "0begin.php";
?>
<h1>Strona trzecia</h1>
Poniżej  znajdzie sie rozwiązanie trzeciego ćwiczenia
<br>
<ul>

<div style="text-align:center"> 
  <button onclick="start()">Start/Pauza</button> 
  <br>
  <video id="video" width='320' height='240'>
  <source src='film.mp4' type='video/mp4'>
Your browser does not support the video tag.
</video> 
<script>
    var video = document.getElementById("video"); 
    function start() 
    { 
        if (video.paused) 
            video.play(); 
        else 
            video.pause(); 
    } 
</script>
</ul>
<?php
include "0end.php";
