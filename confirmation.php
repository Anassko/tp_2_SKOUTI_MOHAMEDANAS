<?php
include 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    print_r($_POST);

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    for ($i = 0; $i < count($_POST['street']); $i++) {
        $street = $conn->real_escape_string($_POST['street'][$i]);
        $street_nb = $_POST['street_nb'][$i];
        $type = $conn->real_escape_string($_POST['type'][$i]);
        $city = $conn->real_escape_string($_POST['city'][$i]);
        $zipcode = $conn->real_escape_string($_POST['zipcode'][$i]);

        $sql = "INSERT INTO address (street, street_nb, type, city, zipcode) 
                VALUES ('$street', '$street_nb', '$type', '$city', '$zipcode')";

        if ($conn->query($sql) !== TRUE) {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>
