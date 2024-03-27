


<div id="galeria">
<h1>Galéria</h1>
<?php
$kepek = array();
$olvaso = opendir($MAPPA);
while (($fajl = readdir($olvaso)) !== false) {
    if (is_file($MAPPA.$fajl)) { // almappákkal nem foglalkozunk, csak fájlokkal
    $vege = strtolower(substr($fajl, strlen($fajl)-4));

    if (in_array($vege, $TIPUSOK)) 
    $kepek[$fajl] = filemtime($MAPPA.$fajl);

    }
}
closedir($olvaso);
arsort($kepek);

foreach($kepek as $fajl => $datum)

{
?>



<a href="<?php echo $MAPPA.$fajl ?>">
<img src="<?php echo $MAPPA.$fajl ?>" width="200">
</a>

<p>Név: <?php echo $fajl; ?></p>
<p>Dátum: <?php echo date($DATUMFORMA, $datum); ?></p>


<?php
}
?></div>

