
<?php if(isset($_SESSION['login'])) { ?>
   <a href ='.?oldal=ujkep'> Új kép feltöltése</a>
  


<?php } ?>

<div id="galeria" style="display: inline; float:left; width=100%;">
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
// arsort($kepek);

foreach($kepek as $fajl => $datum)

{
?>

<div id="galeria" style="display: inline; float:left;>

<a href="<?php echo $MAPPA.$fajl ?>">
<img src="<?php echo $MAPPA.$fajl ?>" width="150">

<p>Név: <?php echo $fajl; ?></p>
<p>Dátum: <?php echo date($DATUMFORMA, $datum); ?></p>
</a>
</div>
<?php
}
?>