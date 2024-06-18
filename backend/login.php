<?php
    // login.php

    // Get environment variables
    $servername = getenv('DB_HOST');
    $username = getenv('DB_USER');
    $password = getenv('DB_PASSWORD');
    $dbname = getenv('DB_NAME');

    // Create DB connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get POST data
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Prepare and bind
    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $user, $pass);
    $stmt->execute();
    $result = $stmt->get_result();

    // Validate credentials
    if ($result->num_rows > 0) {
        header("Location: http://localhost:8080/success.php");
    }
    else {
        header("Location: http://localhost:8080/failure.php");
    }

    $stmt->close();
    $conn->close();
?>
