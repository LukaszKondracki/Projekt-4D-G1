<?php

/**
 * Save data to database using MySQLi procedural approach
 */
function save_mysqli_f(string $name, string $email, string $body): bool {

    // Connect to database
    $db = mysqli_connect('127.0.0.1', 'root', '', '4dti');

    // Check connection error
    if (mysqli_connect_errno()) {
        echo mysqli_connect_error();
        return false;
    }

    $stmt = mysqli_stmt_init($db);

    // Create SQL query
    $sql = <<<SQL
        INSERT INTO messages (Name, Email, Body) 
        VALUES (?, ?, ?)
    SQL;

    // Prepare statement
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $body);

    // Execute SQL query
    $result = mysqli_stmt_execute($stmt);

    mysqli_close($db);
    return $result;
}

/**
 * Save data to database using MySQLi object-oriented approach
 */
function save_mysqli_o(string $name, string $email, string $body): bool {

    // connect to database
    $db = new mysqli('127.0.0.1', 'root', '', '4dti');

    // check connection error
    if ($db->connect_errno) {
        echo $db->connect_error;
        return false;
    }

    // Create SQL query
    $sql = <<<SQL
        INSERT INTO messages (Name, Email, Body) 
        VALUES (?, ?, ?)
    SQL;

    $stmt = $db->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $body);

    $result = $stmt->execute();
    return $result;
}


/**
 * Save data to database using PDO
 */
function save_pdo(string $name, string $email, string $body): bool {
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=4dti', 'root', '');
    } catch(Exception $e) {
        echo $e->getMessage();
        return false;
    }
    // Create SQL query
    $sql = <<<SQL
        INSERT INTO messages (Name, Email, Body) 
        VALUES (:name, :email, :body)
    SQL;

    // prepare statement
    $stmt = $db->prepare($sql);

    $result = $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':body' => $body
    ]);
    
    return $result;
}