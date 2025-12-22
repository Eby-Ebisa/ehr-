<?php
// Include the database connection file
include 'db_connect.php';

// Prepare the SQL query to select all patients
$sql = "SELECT patient_id, first_name, last_name, date_of_birth, gender, contact_number, created_at FROM patients ORDER BY patient_id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View All Patients</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 1000px; margin: auto; }
        h2 { text-align: center; color: #333; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #007bff; color: white; }
        tr:nth-child(even) { background-color: #f2f2f2; }
        .back-link { display: block; margin-top: 15px; text-align: center; }
    </style>
</head>
<body>

<div class="container">
    <h2>📋 Registered Patients List</h2>

    <?php
    if ($result->num_rows > 0) {
        // Output data in a table
        echo "<table>";
        echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>DOB</th><th>Gender</th><th>Contact</th><th>Registered On</th></tr>";
        
        // Loop through all the results (rows)
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["patient_id"] . "</td>";
            echo "<td>" . htmlspecialchars($row["first_name"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["last_name"]) . "</td>";
            echo "<td>" . $row["date_of_birth"] . "</td>";
            echo "<td>" . $row["gender"] . "</td>";
            echo "<td>" . htmlspecialchars($row["contact_number"]) . "</td>";
            echo "<td>" . $row["created_at"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p style='text-align: center;'>No patients registered yet. Please use the registration form to add data.</p>";
    }
    
    // Close the connection
    $conn->close();
    ?>
    
    <a href="register_patient.php" class="back-link">← Go to Registration Form</a>
</div>

</body>
</html>