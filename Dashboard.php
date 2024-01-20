<?php
session_start();

// Check if the user is an admin, otherwise redirect them
if ($_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Fetch contact form data from the database
$conn = new mysqli("localhost", "root", "", "luxeliving");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM kontakti";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Add your head content here -->
</head>
<body>


    <!-- Your existing dashboard content -->

    <div style="border:1px black solid;">
    <h1>Contact Form Submissions</h1>
    <hr>

    <?php
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<p><b>Emri Mbiemri:</b> " . $row["emri_mbiemri"] . "<br><b>Email:</b> " . $row["email"] . "<br><b>Message: </b>" . $row["pershkrimi"] . "</p>";
        }
    } else {
        echo "No contact form submissions yet.";
    }

    $conn->close();
    ?>

<div>
 


   

</body>
</html>
