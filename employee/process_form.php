<?php
// Database configuration
$servername = "localhost"; // Change this to your database server
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "employee_info";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn) {
    echo("Connection : ");
}
else{
    echo"failed";
}

// Retrieve data from the form
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$address = $_POST["address"];
$hire_date = $_POST["hire_date"];

// Insert data into the database
$sql = "INSERT INTO employee_table (first, last, email, address, date) 
        VALUES ('$first_name', '$last_name', '$email', '$address', '$hire_date')";

if ($conn->query($sql) === TRUE) {
    echo "Employee record inserted successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
