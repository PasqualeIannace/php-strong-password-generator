
<?php
function randomMinuscole($pwLength, $carattere)
{
    if ($pwLength % 2 !== 0) {
        $resto = $pwLength % 2;
        $pwLength += $resto;
    }
    $pwLength /= 4;

    $alphaLength = strlen($carattere) - 1;
    for ($i = 0; $i < $pwLength; $i++) {
        $n = rand(0, $alphaLength);
        $password[] = $carattere[$n];
    }
    return implode($password);
}

function random($pwLength, $carattere)
{
    if ($pwLength % 2 !== 0) {
        $resto = $pwLength % 2;
        $pwLength -= $resto;
    }
    $pwLength /= 4;

    $alphaLength = strlen($carattere) - 1;
    for ($i = 0; $i < $pwLength; $i++) {
        $n = rand(0, $alphaLength);
        $password[] = $carattere[$n];
    }
    return implode($password);
}
