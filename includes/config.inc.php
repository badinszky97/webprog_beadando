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
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'receptek' => array('fajl' => 'receptek', 'szoveg' => 'Receptek', 'menun' => array(0,1)),
    'tablazat' => array('fajl' => 'tablazat', 'szoveg' => 'Táblázat', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0)),
    'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');

$MAPPA = 'galeria/'; // './kepek/' is jó
$TIPUSOK = array ('.jpg', '.png'); // kép típusok
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 500*1024;

include "dbconnect.php";

?>