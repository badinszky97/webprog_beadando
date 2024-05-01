<?php
$ablakcim = array(
    'cim' => 'Receptgyűjtemény agglegényeknek',
);

$fejlec = array(
    'kepforras' => 'logo.png',
    'kepalt' => 'logo',
	'cim' => 'Falánk Feri recepjei',
	'motto' => 'Enni azért kell..'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Falánk Feri recepjei'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1,1)),
	
	'receptek' => array('fajl' => 'receptek', 'szoveg' => 'Receptek', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'Táblázat', 'menun' => array(1,1)),
    'uzenet' => array('fajl' => 'uzenet', 'szoveg' => 'Üzenj a tulajnak', 'menun' => array(1,1)),
    'kapott_uzenetek' => array('fajl' => 'kapott_uzenetek', 'szoveg' => 'Kapott üzenetek', 'menun' => array(0,1)),
    'uzenet_ment' => array('fajl' => 'uzenet_ment', 'szoveg' => 'Üzenet mentese', 'menun' => array(0,0)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
    'recept1' => array('fajl' => 'recept1', 'szoveg' => 'Recept1', 'menun' => array(0,0)),
    'recept2' => array('fajl' => 'recept2', 'szoveg' => 'Recept1', 'menun' => array(0,0)),
    'recept3' => array('fajl' => 'recept3', 'szoveg' => 'Recept1', 'menun' => array(0,0)),
    'recept4' => array('fajl' => 'recept4', 'szoveg' => 'Recept1', 'menun' => array(0,0)),
    'ujkep' => array('fajl' => 'ujkep', 'szoveg' => 'Képfeltöltés', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA = 'galeria/'; // './kepek/' is jó
$TIPUSOK = array ('.jpg', '.png'); // kép típusok
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;


include ("dbconnect.php");

?>