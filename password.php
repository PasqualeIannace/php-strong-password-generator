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

$lettere = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
$lettereMaiuscole = strtoupper($lettere);
$lettereMinuscole = explode(" ", $lettere);
$lettereMaiuscole = explode(" ", $lettereMaiuscole);

?>

<body class="bg-primary-subtle">
    <div class="container bg-white">
        <h1>La password generata</h1>
        <p><?php echo $pwLength ?></p>

        <?php $random = array_rand($lettereMinuscole, $pwLength);

        for ($i = 0; $i < $pwLength; $i++) {

            $randomIndex = $random[$i];
            $password[] = $lettereMinuscole[$randomIndex];
        };
        $password = implode($password);
        echo "La password è: $password";
        ?>
    </div>
</body>

</html>