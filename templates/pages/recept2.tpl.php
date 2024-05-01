<?php
if(isset($_SESSION['login'])) {
    // bejelentkezés dupla ellenőrzése
    try {?>

    <h2> Rántotta </h2>
<img src="./images/chef.jpeg">


<?php if(!isset($_SESSION['login'])) { ?>
<h3>A receptek olvasásához jelentkezz be!</h3>

<?php } else { ?>
    
    <h3>Kedves <?= $_SESSION['login']?> , íme a Rántotta receptje !</h3>
<div style="display: inline-grid;
  grid-template-columns: 250px  400px auto ;
  background-color: white;
  padding: 5px;
  border:0px;">
    <div style=" padding: 15px; display:inline-block;" >
        <h4> Hozzávalók:</h4>
        <ul>
            <li>1. 1 csipet só </li>
            <li>2. 2 fej hagyma </li>    
            <li>3. 8 db tojás </li>    
            <li>4  3 szelet rozskenyér </li>    
            <li>5. kevés szalonna </li>
            <li>6. 1-2 ek. olaj</li>


        </ul>
    </div>
    <div style="padding: 15px; display:inline-block;">
    <h4> Elkészítés:</h4>
    <p > Szerezz valahonnan egy tiszta edényt. (Érdemes néha köszönni a szomszéd néninek, neki biztosan van ilyen.)</p>
    <p> Ha van éles késed vágd fel a hagymát és a szalonnát. Tedd a megszerzett edénybe, és lassú tüzön párold a hagymát üvegesre.</p>
    <p> Törd fel a tojásokat és tedd egy szintén tiszta tányérba. Ha nem szereted a tojáshéjat, akkor azt még most vedd ki. Sózd meg.
         Egy villával alaposan keverd össze a tojásokat, a legjobb módszer, ha ezt hangos csörömpöléssel teszed meg.</p>
         <p>Öntsd a tojást a megpárolt hagymára, és egy fakanállal folyamatosan kívülről befelé kevergesd.</p>
         <p>Ha nem voltál előrelátó, és elhitted, hogy mindent felsoroltam az összetevőknél, akkor most megint csöngess be a szomszédhoz, 
            mert paprika is kéne, meg nem biztos, hogy ennyi tohjáshoz elég a kenyér</p>
        <br>
        <a href ='.?oldal=receptek'> Vissza a receptekhez</a>
    </div>
   
<?php }
?>
</div> 
<?php
}
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    print("Ehhez be kell jelentkezni.");
}
?>
