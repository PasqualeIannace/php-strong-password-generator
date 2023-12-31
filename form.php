<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-primary-subtle">
    <div class="container bg-white">
        <h1 class="text-center">Password Generator</h1>

        <form action="password.php">
            <label for="length">Lunghezza password: </label>
            <input id="length" type="number" name="number" min="4" required>
            <input type="checkbox" name="L" id="">
            <input type="checkbox" name="N" id="">
            <input type="checkbox" name="S" id="">
            <button class="btn btn-primary" type="submit">Invia</button>
        </form>
    </div>
</body>

</html>