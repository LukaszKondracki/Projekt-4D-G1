<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$pass = $_POST['password'];
$pass2 = $_POST['password2'];

$hash = password_hash($pass, PASSWORD_ARGON2ID);

$errors = [];

if (empty($name)) {
    $errors[] = 'Name cannot be empty';
}

if (empty($email)) {
    $errors[] = 'Email cannot be empty';
}

if ( ! filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Incorrect email address';
}

if ($email !== $email2) {
    $errors[] = 'Email addresses don\'t match';
}

if (strlen($pass) < 10) {
    $errors[] = 'Password must be at least 10 characters';
}

if ( ! preg_match('/[A-Z]/', $pass)) {
    $errors[] = 'Password must contain at least 1 capital letter';
}

if ($pass !== $pass2) {
    $errors[] = 'Passwords don\'t match';
}

if ( ! isset($_POST['agree'])) {
    $errors[] = 'You need to agree to privacy policy';
}

if (count($errors) > 0) {
    $_SESSION['errors'] = $errors;
    header('Location: /4dti1/register.php');
    die();
}


/**********************************************\
|*              BAZA DANYCH                   *|
\**********************************************/

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=4dti', 'root', '');
} catch(Exception $e) {
    echo $e->getMessage();
    return false;
}

// Create SQL query
$sql = <<<SQL
    INSERT INTO Users (Name, Email, Password) 
    VALUES (:name, :email, :password)
SQL;

// prepare statement
$stmt = $db->prepare($sql);

$result = $stmt->execute([
    ':name' => $name,
    ':email' => $email,
    ':password' => $hash
]);

echo $result;

header('Location: /4dti1/');

die();