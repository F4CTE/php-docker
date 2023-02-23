<?php
$clients = ["Max","mike","joe","james","ji"];
for ($i = count($clients)-1; $i >= 0; $i--) {
    echo $clients[$i]."<br>";
};

$i = count($clients);
do {
    $i--;
    echo $clients[$i]."<br>";
} while ($i > 0);
?> 
