 <?php
include "src/template.php";

 
$t = array();
$t['nadpis'] = "E-learning Ayzu s.r.o.";
$t['autor'] = "Ladislav Velecký";
$t['obsah'] = 'E-learning společnosti Ayzu';
 
$h = array();
$h['title'] = "Home";


echo insertTemplate('src/head.php', $h);
echo insertTemplate('src/clanek.php', $t);
echo insertTemplate('src/menu.php', $t);
echo insertTemplate('src/foot.php'); 
