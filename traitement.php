<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num_addresses = $_POST["num_addresses"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Adresse Form</title>
</head>
<body>
    <div class="container">
        <form action="confirmation.php" method="post">
            <?php
            for ($i = 1; $i <= $num_addresses; $i++) {
                echo "<h2>Adresse $i</h2>";
                echo '<label for="street">Street:</label>';
                echo '<input type="text" name="street[]" maxlength="50" required>';
                echo '<label for="street_nb">Street Number:</label>';
                echo '<input type="number" name="street_nb[]" required>';
                echo '<label for="type">Type:</label>';
                echo '<select name="type[]">
                        <option value="livraison">Livraison</option>
                        <option value="facturation">Facturation</option>
                        <option value="autre">Autre</option>
                      </select>';
                echo '<label for="city">City:</label>';
                echo '<select name="city[]">
                        <option value="Montréal">Montréal</option>
                        <option value="Laval">Laval</option>
                        <option value="Toronto">Toronto</option>
                        <option value="Québec">Québec</option>
                      </select>';
                echo '<label for="zipcode">Zipcode:</label>';
                echo '<input type="text" name="zipcode[]" maxlength="6" required>';
            }
            ?>
            <button type="submit">Confirmer</button>
        </form>
    </div>
</body>
</html>

<?php
}
?>
