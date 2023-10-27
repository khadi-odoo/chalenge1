<!DOCTYPE html>
<html>

<head>
    <title>Ma table de multiplication</title>

</head>

<body>
    <form method="post" action="">
        <h3>Table de multiplication</h3>
        <labe for="table">Valeur numérique</label>
            <input type="number" name="valeur">

            <input type="submit" name="valider" value="Entrez"><br><br>

    </form>

</body>

</html>

<?php


if (isset($_POST["valider"])) {
    $vlr = $_POST["valeur"];
    if (is_numeric($vlr) && ($vlr > 0)) {

        if ($vlr % 2 == 0) {
            echo "<strong> La valeur  " . $vlr . " est paire</strong><br><br>";
        } else {
            echo "<stong> La valeur " . $vlr . "  est un nombre premier</strong><br><br>";
        }

        for ($i = 1; $i <= 10; $i++) {
            $resultat = $vlr * $i;

            echo "<strong>" . $vlr . " * " . $i . " =" . $resultat . "</strong><br>";
        }
    } else {
        echo "Entrez une valeur correcte";
    }
}
