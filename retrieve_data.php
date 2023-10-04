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

// Perform SQL query to retrieve data
$sql = "SELECT * FROM form_data";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data as a table
    echo "<table>";
    echo "<tr><th>Name</th><th>Phone</th><th>Email</th><th>State</th><th>City</th><th>Country</th><th>Pincode</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['state'] . "</td>";
        echo "<td>" . $row['city'] . "</td>";
        echo "<td>" . $row['country'] . "</td>";
        echo "<td>" . $row['pincode'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}

// Close the database connection
$conn->close();
?>
