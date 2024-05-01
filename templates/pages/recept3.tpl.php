<?php
if(isset($_SESSION['login'])) {
    // bejelentkezés dupla ellenőrzése
    try {?>

    <h2> Tea keksszel </h2>
<img src="./images/chef.jpeg">


<?php if(!isset($_SESSION['login'])) { ?>
<h3>A receptek olvasásához jelentkezz be!</h3>

<?php } else { ?>
    
    <h3>Kedves <?= $_SESSION['login']?> , íme a Kekszes tea receptje !</h3>
<div style="display: inline-grid;
  grid-template-columns: 250px  400px auto ;
  background-color: white;
  padding: 5px;
  border:0px;">
    <div style=" padding: 15px; display:inline-block;" >
        <h4> Hozzávalók:</h4>
        <ul>
            <li>1. 2dl víz</li>
            <li>2. 1 db teafilter</li>    
            <li>3. néhány Keksz</li>    
            <li>4  cukor </li>    
            <li>6. 3 gerezd fokhagyma</li>


        </ul>
    </div>
    <div style="padding: 15px; display:inline-block;">
    <h4> Elkészítés:</h4>
    <p >Ha vendégek jönnek, de nem akarod , hogy sokáig maradjanak, akkor ez a neked való titkos recept.</p>
    <p>A recep egy személyes. Forrald fel a vizet, vagy tedd mikróba egy bögrében. A forrásban lévő vizet a csészébe előre elhelyezett teafilterre kell önteni, 
        majd az egész készítményt állni kell hagyni néhány percig</p>
    <p>A teát ízlés szerint lehet édesíteni, de nem fontos. A kekszet megszámoljuk, majd elhelyezzük a teáscsésze aljánál. A fel nem használt kekszet a zacsóba utólag visszahelyezhetjük.</p>
    <p> A megpucolt 3 gerezd fokhagyma nem feltétlenül tartozik az eredeti recepthez, de a vendégek között mindíg akad egy ínyenc, aki kipróbálja. A keksz harapható, ha régi, akkor áztatható, ha nem fogy el, elrakható.</p>
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
