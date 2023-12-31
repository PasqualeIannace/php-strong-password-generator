<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<?php
include __DIR__ . "/functions.php";

$pwLength = $_GET["number"];
$password = array();
$lettereMaiuscole = array();

$lettere = "abcdefghijklmnopqrstuvwxyz";
$lettereMaiuscole = strtoupper($lettere);
$numeri = "0123456789";
$simboli = "!#$%&'()*+,-./:;=?@[\]^_`{|}~"

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

        echo str_shuffle($password);
        echo "<br>";
        echo "Lunghezza pw:" . strlen($password);

        echo "<br>";
        echo "<a class='btn btn-info' href='form.php'>Torna indietro</a>";
        ?>
    </div>
</body>

</html>