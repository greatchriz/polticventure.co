<?php
// Start the session
session_start();

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
    $transaction_hash = $_POST["transaction_hash"];
    $amount = $_POST["amount"];

    // Prepare and execute the SQL query to insert data into the database
    $sql = "INSERT INTO add_funds (transaction_hash, amount) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sd", $transaction_hash, $amount);
    mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt);

     // Redirect to another page after successful data insertion
     header("Location: /?a=account");
     exit;
}

// Close the database connection
mysqli_close($conn);
?>