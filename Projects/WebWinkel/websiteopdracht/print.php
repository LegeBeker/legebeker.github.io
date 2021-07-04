<?php
$map = opendir('file');
while ($bestand = readdir($map)){
    echo "<a href='file/$bestand'>$bestand</a><br>";
}
closedir($map);
?>
