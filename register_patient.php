<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Patient Registration</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .container { background: #fff; padding: 25px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); max-width: 500px; margin: auto; }
        h2 { text-align: center; color: #333; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input[type="text"], input[type="date"], textarea, select { 
            width: 100%; padding: 10px; margin-top: 5px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; 
        }
        button { background-color: #28a745; color: white; padding: 12px 15px; border: none; border-radius: 4px; cursor: pointer; width: 100%; font-size: 16px; }
        button:hover { background-color: #1e7e34; }
    </style>
</head>
<body>

<div class="container">
    <h2>🏥 Register New Patient</h2>
    
    <form action="save_patient.php" method="POST">
        
        <label for="first_name">First Name *</label>
        <input type="text" id="first_name" name="first_name" required>

        <label for="last_name">Last Name *</label>
        <input type="text" id="last_name" name="last_name" required>
        
        <label for="date_of_birth">Date of Birth *</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required>
        
        <label for="gender">Gender *</label>
        <select id="gender" name="gender" required>
            <option value="">-- Select Gender --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>
        
        <label for="contact_number">Contact Number</label>
        <input type="text" id="contact_number" name="contact_number">
        
        <label for="address">Address</label>
        <textarea id="address" name="address" rows="3"></textarea>
        
        <button type="submit">💾 Save Patient Record</button>
    </form>
</div>

</body>
</html>