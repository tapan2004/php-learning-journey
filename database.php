<?php
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "testingDb";

$conn = null;

try {
    $conn = mysqli_connect(
        $db_server,
        $db_username,
        $db_password,
        $db_name
    );

    echo "DB connection successful<br>";

    // Create table
    $sql = "CREATE TABLE IF NOT EXISTS MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully<br>";
    } else {
        echo "Error creating table: " . $conn->error . "<br>";
    }

    // Insert data
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
            VALUES ('John', 'Doe', 'john@example.com')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error inserting record: " . $conn->error . "<br>";
    }

    // Close connection
    $conn->close();

} catch (mysqli_sql_exception $e) {
    echo "Could not connect: " . $e->getMessage();
}
?>
