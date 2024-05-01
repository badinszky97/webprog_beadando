
<?php
if(isset($_SESSION['login'])) {
    // bejelentkezés dupla ellenőrzése
    try {
        // Kapcsolódás
       
        $dbh = new PDO('mysql:host='.$dbhostname.';dbname='.$dbname, $dbuser, $dbjelszo, array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
        
        // Felhasználó keresése
        $sqlSelect = "select idopont, nev, uzenet from uzenetek order by idopont desc";
        $sth = $dbh->prepare($sqlSelect);
        //$row = $sth->fetch(PDO::FETCH_ASSOC);
        $sth->execute();

        print("<div class=\"row\">");
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $data = $row["idopont"] . "\t" . $row["nev"] . "\t" . $row["uzenet"] . "\n";
            //print $data;

            print("<div class=\"col-ld-3 uzenet\">");
                print("Időpont: " . $row["idopont"] . "</br>");
                print("Név: " . $row["nev"] . "</br>");
                print("Üzenet: " . $row["uzenet"] . "</br>");
            print("</div>");

        }
        print("</div>");

    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    print("Ehhez be kell jelentkezni.");
}
?>
