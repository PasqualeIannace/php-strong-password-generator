<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php
$pwLength = $_GET["number"];
$password = array();
$lettereMaiuscole = array();

$lettere = "abcdefghijklmnopqrstuvwxyz";
$lettereMaiuscole = strtoupper($lettere);
$numeri = "0123456789";
$simboli = "!#$%&'()*+,-./:;<=>?@[\]^_`{|}~"

?>

<body class="bg-primary-subtle">
    <div class="container bg-white text-center">
        <h1>Password generata</h1>
        <p>Lunghezza: <?php echo $pwLength ?></p>

        <?php
        $password = randomMinuscole($pwLength, $lettere);
        $password .= random($pwLength, $lettereMaiuscole);
        $password .= random($pwLength, $numeri);
        $password .= random($pwLength, $simboli);

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

        echo str_shuffle($password);
        ?>
    </div>
</body>

</html>