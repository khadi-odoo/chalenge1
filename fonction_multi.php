<?php


function multiplication($nbre, $limite)

{

    echo "<h2>Table de multiplication de " . $nbre . "</h2>";

    for ($i = 1; $i <= $limite; $i++) {
        $result = $nbre * $i;

        echo "<strong>" . $nbre . " * " . $i . " = " . $result . "</strong><br><br>";
    }
}

multiplication(5, 10);
