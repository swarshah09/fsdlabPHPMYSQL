<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "formvalidatefsd";

// Create a connection to MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $pincode = $_POST['pincode'];

    // Perform SQL insert into the 'form_data' table
    $sql = "INSERT INTO form_data (name, phone, email, state, city, country, pincode)
            VALUES ('$name', '$phone', '$email', '$state', '$city', '$country', '$pincode')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
