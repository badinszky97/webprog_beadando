
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
        //<div style="overflow-x:auto;">

        //print("<div class=\"row\">");
        print("<table>");
        //class=\"col-ld-3 uzenet\">");
        print("<caption>Üzenetek táblázatos felsorolása</caption>");
        print("<tr>
            <th>Időpont</th>
            <th>SalNév</th>
            <th>Üzenet</th>
            </tr>");

        while ($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $data = $row["idopont"] . "\t" . $row["nev"] . "\t" . $row["uzenet"] . "\n";
            //print $data;

                print("<tr><td> " . $row["idopont"] . "</td>");
                print("<td>" . $row["nev"] . "</td>");
                print("<td> " . $row["uzenet"] . "</td></tr>");

        }
        print("</table>");

       // print("</div>");

    }
    catch (PDOException $e) {
        $errormessage = "Hiba: ".$e->getMessage();
    }      
}
else {
    print("Ehhez be kell jelenzkezni.");
}
?>

