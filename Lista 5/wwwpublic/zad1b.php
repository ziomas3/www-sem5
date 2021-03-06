<!DOCTYPE html>
<head>
    <meta charset="utf-8">
<style>
.menu1 {width:25%;margin: 0 auto;}
.menu1 a {font-size: 20px} 
.menu1 a {text-decoration:none;} 
.menu1 a {font-family: arial;display:block;padding:4px 20px;margin:0px}
.menu1 >li {padding:0;border:1px solid grey}
.menu1 >li  {background:darkgrey; color:white;margin:2px;}
.menu1 ul {list-style-type:none} 
.menu1 ul {padding:0}
.menu1 li ul {position:absolute;border:1px solid grey;background:darkgrey;display:none;}
.menu1 a {color:white;}
.menu1 a:hover {background:grey;}
.menu1 li:hover ul {display:block}
.menu1 >li {display:table-cell;padding:0;border:none}
</style>
</head>
<html>
<body>
<?php
include "1menu.php";
?>
<div>
<ul class="menu1">
    <li><a href=#>Ludzie</a>
      <ul>
        <li><a href=#>Einstein</a></li>
        <li><a href=#>Feynman</a></li>
        <li><a href=#>Chopin</a></li>
       </ul>
    </li>
    <li><a href=#>Figury</a>
      <ul>
        <li><a href=#>Kwadrat</a></li>
        <li><a href=#>Koło</a></li>
        <li><a href=#>Trójkąt</a></li>
      </ul>
    </li>
    <li><a href=#>Miasta</a>
      <ul>
        <li><a href=#>Wrocław</a></li>
        <li><a href=#>Kraków</a></li>
        <li><a href=#>Poznań</a></li>
      </ul>
    </li>
    <li><a href=#>Ryby</a>
      <ul>
        <li><a href=#>Dorsz</a></li>
        <li><a href=#>Śledź</a></li>
        <li><a href=#>Sum</a></li>
      </ul>
    </li>
</ul>
<p>
Kaskadowe arkusze stylów (ang. Cascading Style Sheets, w skrócie CSS) to język służący do opisu formy prezentacji (wyświetlania) stron WWW. CSS został opracowany przez organizację W3C w 1996 r. jako potomek języka DSSSL przeznaczony do używania w połączeniu z SGML-em. Pierwszy szkic CSS zaproponował w 1994 r. Håkon Wium Lie[1].
</p>
<p>
Arkusz stylów CSS to lista dyrektyw (tzw. reguł) ustalających w jaki sposób ma zostać wyświetlana przez przeglądarkę internetową zawartość wybranego elementu (lub elementów) (X)HTML lub XML. Można w ten sposób opisać wszystkie pojęcia odpowiedzialne za prezentację elementów dokumentów internetowych, takie jak rodzina czcionek, kolor tekstu, marginesy, odstęp międzywierszowy lub nawet pozycja danego elementu względem innych elementów bądź okna przeglądarki. Wykorzystanie arkuszy stylów daje znacznie większe możliwości pozycjonowania elementów na stronie, niż oferuje sam (X)HTML.
</p>
<p>
CSS został stworzony w celu odseparowania struktury dokumentu od formy jego prezentacji. Separacja ta zwiększa zakres dostępności witryny, zmniejsza zawiłość dokumentu, ułatwia wprowadzanie zmian w strukturze dokumentu. CSS ułatwia także zmiany w renderowaniu strony w zależności od obsługiwanego medium (ekran, palmtop, dokument w druku, czytnik ekranowy). Stosowanie zewnętrznych arkuszy CSS daje możliwość zmiany wyglądu wielu stron naraz bez ingerowania w sam kod (X)HTML, ponieważ arkusze mogą być wspólne dla wielu dokumentów.
</p>
</div>
</body>
</html>
