
<?php
function randomMinuscole($pwLength, $carattere)
{
    $resto = 0;

    if ($pwLength % 4 !== 0) {
        $resto = $pwLength % 4;
        $pwLength -= $resto;
    }
    $pwLength /= 4;
    $pwLength += $resto;

    $alphaLength = strlen($carattere) - 1;
    for ($i = 0; $i < $pwLength; $i++) {
        $n = rand(0, $alphaLength);
        $password[] = $carattere[$n];
    }
    return implode($password);
}

function random($pwLength, $carattere)
{
    if ($pwLength % 4 !== 0) {
        $resto = $pwLength % 4;
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
