<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "testingDb";

$conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);

$firstname = "John";
$lastname = "Doe";
$email = "john@example.com";

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Validation
if (empty($firstname)) {
    echo "First name is required";
} elseif (empty($lastname)) {
    echo "Last name is required";
} elseif (empty($email)) {
    echo "Email is required";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format";
} else {
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('$firstname', '$lastname', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record inserted successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
