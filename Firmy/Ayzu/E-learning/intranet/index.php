<?php
include "src/template.php";

 
$t = array();
$t['nadpis'] = "Intranetový portál společnosti AYZU s.r.o.";
$t['autor'] = Date();
$t['obsah'] = 'Ukázka, jak by mohl vypadat jednoduchý templatovací systém s použitím funkce <a href="http://cz.php.net/manual/en/function.str-replace.php">str_replace()</a>.';


//Texty pro obsah stranky
//Podnadpis
$t['podnadpis'] = "Podnadpis";
//Stred
$t['nadpis_stred'] = "Nadpis uprostřed";
$t['text_stred'] = "Text uprostřed";
//Pravy
$t['nadpis_pravo'] = "Nadpis v pravo";
$t['text_pravo'] = "Text v pravo";
//Levy
$t['nadpis_levo'] = "Nadpis v levo";
$t['text_levo'] = "Text v levo";

$h = array();
$h['title'] = "Domů";


echo insertTemplate('src/head.php', $h);
echo insertTemplate('src/clanek.php', $t);
echo insertTemplate('src/menu.php', $t);
echo insertTemplate('src/stranka.php', $t);
echo insertTemplate('src/foot.php'); 

