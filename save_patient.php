<?php
// Include the database connection file
include 'db_connect.php';

// Check if the request method is POST (meaning the form was submitted)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Get and sanitize input data
    // Use mysqli_real_escape_string for security
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $dob = $conn->real_escape_string($_POST['date_of_birth']);
    $gender = $conn->real_escape_string($_POST['gender']);
    $contact = $conn->real_escape_string($_POST['contact_number']);
    $address = $conn->real_escape_string($_POST['address']);
    
    // 2. Prepare the SQL INSERT statement
    $sql = "INSERT INTO patients (first_name, last_name, date_of_birth, gender, contact_number, address) 
            VALUES ('$first_name', '$last_name', '$dob', '$gender', '$contact', '$address')";
    
    // 3. Execute the query and display the result
    echo "<!DOCTYPE html><html><head><title>Result</title><style>body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }</style></head><body>";
    
    if ($conn->query($sql) === TRUE) {
        echo "<h2>✅ Success!</h2>";
        echo "<p>New patient **" . htmlspecialchars($first_name) . " " . htmlspecialchars($last_name) . "** registered successfully.</p>";
        echo '<p><a href="register_patient.php">← Register another patient</a></p>';
        
    } else {
        echo "<h2>❌ Error!</h2>";
        echo "<p>Error: " . $conn->error . "</p>";
    }
    
    echo "</body></html>";

    // 4. Close the database connection
    $conn->close();

} else {
    // Redirect if accessed directly
    header("Location: register_patient.php");
    exit();
}
?>