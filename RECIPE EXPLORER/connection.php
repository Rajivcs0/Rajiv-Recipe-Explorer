<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "food");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $EMAIL_ID = mysqli_real_escape_string($conn, $_POST['EMAIL_ID']);
    $PASSWORD = $_POST['PASSWORD'];
    $CONFIRMPASSWORD = $_POST['CONFIRMPASSWORD']; 
    $NAME=$_POST['NAME']
    $COMMENTS=$_POST['COMMENTS'];
    $RATING=$_POST['RATING']
    // Validate that the passwords match
    if ($PASSWORD !== $CONFIRMPASSWORD) {
        echo "<script>alert('Passwords do not match'); window.location.href = 'signup.php';</script>";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($PASSWORD, PASSWORD_DEFAULT);

    // Use a prepared statement to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO buy (EMAIL_ID, PASSWORD) VALUES (?, ?)");
    $stmt->bind_param("ss", $EMAIL_ID, $hashedPassword);

    // Execute the query and check for success
    if ($stmt->execute()) {
        echo "<script>alert('Signup successful!'); window.location.href = 'connection.php';</script>";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    mysqli_close($conn);
}
?>