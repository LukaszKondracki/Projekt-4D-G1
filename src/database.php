<?php

function save_mysqli_f(string $name, string $email, string $body) {
    // Connect to database
    $db = mysqli_connect('127.0.0.1', 'root', '', '4dti');
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
    mysqli_stmt_execute($stmt);

    // Check for errors
    if (!mysqli_error()) {
        echo 'Ok';
    } else {
        echo 'Fail';
    }
}

function save_mysqli_o(string $name, string $email, string $body) {

}

function save_pdo(string $name, string $email, string $body) {

}