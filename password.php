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

$lettere = "abcdefghijklmnopqrstuvwxyz";
$lettereMaiuscole = strtoupper($lettere);
$numeri = "0123456789";
$simboli = "!#$%&'()*+,-./:;<=>?@[\]^_`{|}~"

?>

<body class="bg-primary-subtle">
    <div class="container bg-white">
        <h1>Password generata</h1>
        <p><?php echo $pwLength ?></p>

        <?php
        $password = random_str($pwLength, $lettere);

        function random_str($pwLength, $lettere)
        {
            $alphaLength = strlen($lettere) - 1;
            for ($i = 0; $i < $pwLength; $i++) {
                $n = rand(0, $alphaLength);
                $password[] = $lettere[$n];
            }
            return implode($password);
        }

        echo $password;
        ?>
    </div>
</body>

</html>