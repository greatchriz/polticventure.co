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
    $total_amount = $_POST["total_amount"];
    $main_username = $_POST["main_username"];
    $main_amount = $_POST["main_amount"];
    $main_date = $_POST["main_date"];
    $second_username = $_POST["second_username"];
    $second_amount = $_POST["second_amount"];
    $second_date = $_POST["second_date"];

    // Prepare and execute the SQL query to insert data into the database
    $sql = "INSERT INTO joint_deposit (total_amount, main_username, main_amount, main_date, second_username, second_amount, second_date) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "dssssds", $total_amount, $main_username, $main_amount, $main_date, $second_username, $second_amount, $second_date);
    mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt);

    // Save the form data in a session variable
    $_SESSION['joint_deposit'] = array(
        'total_amount' => $total_amount,
        'main_username' => $main_username,
        'main_amount' => $main_amount,
        'main_date' => $main_date,
        'second_username' => $second_username,
        'second_amount' => $second_amount,
        'second_date' => $second_date
    );

     // Redirect to another page after successful data insertion
     header("Location: /?a=account");
     exit;
}

// Close the database connection
mysqli_close($conn);
?>