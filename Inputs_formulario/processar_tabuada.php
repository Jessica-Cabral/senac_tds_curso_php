<?php

//numero
$numero = $_POST['numero'];

//tabuada
for ($i=1; $i <= 100; $i++) {
    echo "<br>". $numero. "x".$i." = " ($numero * $i);
}
?>