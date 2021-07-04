<?php
        $klant = $_GET["name"];
        $tijd  = date("dm Hi");
        $mail = $_GET["mail"];
        $comment  = $_GET["comment"];
        $e = "Beste $klant,<br>";
        $e.= "Hartelijk dank voor uw bericht:<br>";
        $e.= "$comment";
        $e.= "Uw mail is:";
        $e.= "$mail";
        $e.= $tijd;
        echo $e;
        $bestandsnaam = "file/$klant $tijd.html";
        file_put_contents($bestandsnaam, $e);
        ?>
