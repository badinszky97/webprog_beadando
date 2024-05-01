<?php
if(isset($_SESSION['login'])) {
    // bejelentkezés dupla ellenőrzése
    try {?>

    <h2> Rozskenyér </h2>
<img src="./images/rozskenyer.jpg">


<?php if(!isset($_SESSION['login'])) { ?>
<h3>A receptek olvasásához jelentkezz be!</h3>

<?php } else { ?>
    
    <h3>Kedves <?= $_SESSION['login']?> , íme a Rozskenyér receptje !</h3>
<div style="display: inline-grid;
  grid-template-columns: 250px  400px auto ;
  background-color: white;
  padding: 5px;
  border:0px;">
    <div style=" padding: 15px; display:inline-block;" >
        <h4> Hozzávalók:</h4>
        <ul>
            <li>1. 1 evőkanál só </li>
            <li>2. 25dkg élesztő </li>    
            <li>3. 80 dkg liszt </li>    
            <li>4  1 evőkanál cukor </li>    
            <li>5. 6 dl víz </li>
            <li>6. 3 gerezd fokhagyma</li>


        </ul>
    </div>
    <div style="padding: 15px; display:inline-block;">
    <h4> Elkészítés:</h4>
    <p > Tudom, most arra gondolsz, hogy becsaptalak, ezt nem is tudod elkészíteni. Ez lehet, hogy így van. </p>
    <p>Ha  mégis belevágsz, akkor szerezz egy tepsit. Tedd az élesztőt egy bögre langyos vízbe, majd futtasd fel.</p>
    <p>Az összetevőket egy tálban keverd össze, add hozzá a felfuttatott élesztőt. Alapos keverés után hagyd állni a
         tésztát, majd egy fél óra elteltével dagaszd át és tedd be a 200 fokos sütőbe. </p>
     <p>Kb. 40 perc múlva készen is van.</p>    
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
