<?php
if(isset($_SESSION['login'])) {
    // bejelentkezés dupla ellenőrzése
    try {?>

    <h2> Zsíroskenyér </h2>
<img src="./images/chef.jpeg">


<?php if(!isset($_SESSION['login'])) { ?>
<h3>A receptek olvasásához jelentkezz be!</h3>

<?php } else { ?>
    
    <h3>Kedves <?= $_SESSION['login']?> , íme a Zsíroskenyér receptje !</h3>
<div style="display: inline-grid;
  grid-template-columns: 250px  400px auto ;
  background-color: white;
  padding: 5px;
  border:0px;">
    <div style=" padding: 15px; display:inline-block;" >
        <h4> Hozzávalók:</h4>
        <ul>
            <li>1. Zsír</li>
            <li>2. Kenyér</li>    
            <li>3. hagymára </li>    
            <li>4  só </li>    
            <li>5. paprika, bors, ízlés szerint </li>
            

        </ul>
    </div>
    <div style="padding: 15px; display:inline-block;">
    <h4> Elkészítés:</h4>
    <p >Ezt a gazdaságos receptet ajánlom azoknak, akik nem akarnak mosogatni.</p>
    <p>A boltban már előre felszeletelt kenyérből étvágy szerinti mennyiséget merítünk, majd megfelelő vastagságú zsírréteggel látjuk el. </p>
<p>Alapos mérlegelést követően felvágjuk, felszeleteljük a hagymát, majd szálirányban elhelyezzük a kenyér felületén. Sóval, borssal, esetleg paprikával ízesítjük, majd  megesszük.</p>
<p> Mint minden ételhez, ehhez is érdemes még egy sört is legurítani.</p>
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
