<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Adresse Form</title>
</head>
<body>
    <div class="container">
        <form action="traitement.php" method="post">
            <label for="num_addresses">Combien d'adresses avez-vous ?</label>
            <input type="number" name="num_addresses" required>
            <button type="submit">Suivant</button>
        </form>
    </div>
</body>
</html>
