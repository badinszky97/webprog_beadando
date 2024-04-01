<?php
    if(isset($_POST['uzenetkuldd']))
    {
        // a gomb meg lett nyomva
        if(isset($_POST['neve']) && isset($_POST['uzenet']))
        {
            // mind a két mező ki lett töltve
            try {
                // Kapcsolódás
               
                $dbh = new PDO('mysql:host='.$dbhostname.';dbname='.$dbname, $dbuser, $dbjelszo,
                                array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
                $dbh->query('SET NAMES utf8 COLLATE utf8_hungarian_ci');
                
                // Query előkészítése
                $sqlSelect = "INSERT INTO uzenetek (nev, uzenet) VALUES(:nev, :uzenet)";
                $sth = $dbh->prepare($sqlSelect);

                if(isset($_SESSION['login']))
                {
                    $nev = $_POST['neve'] . "(" . $_SESSION['login'] . ")";
                }
                else
                {
                    $nev = "Vendég";
                }
                // beszúrás
                $sth->execute(array(':nev' => $nev, ':uzenet' => $_POST['uzenet']));
                print("Az üzenet elküldésre került.<br><br>");
                print("Név: " . $nev . "<br>");
                print("Üzenet: " . $_POST['uzenet'] . "<br>");
            }
            catch (PDOException $e) {
                $errormessage = "Hiba: ".$e->getMessage();
            }      
        }
        else
        {
            print("Hibás oldalhívás! a");
        }
    }
    else
    {
        print("Hibás oldalhívás! b");
    }
?>