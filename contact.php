<?php
// Replace with your database credentials
$servername = "localhost";
$username = "dexfpheh_dexfintech";
$password = "g?S,B?L[Q_QX";
$dbname = "dexfpheh_contact";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Prepare and execute the SQL query to insert data into the database
    $sql = "INSERT INTO form_data (name, email, message) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
    mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt);

    echo "Data has been stored in the database!";
}

// Close the database connection
mysqli_close($conn);
