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
    $id = $_POST['id'];
    $newName = $_POST['newName'];
    $newPhone = $_POST['newPhone'];
    $newEmail = $_POST['newEmail'];

    // Perform SQL update in the 'form_data' table
    $sql = "UPDATE form_data
            SET name='$newName', phone='$newPhone', email='$newEmail'
            WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
