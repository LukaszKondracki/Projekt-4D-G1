<?php
session_start();

$email = $_POST['email'];
$pass = $_POST['password'];

$errors = [];

if (empty($email)) {
    $errors[] = 'Email cannot be empty';
}

if (empty($pass)) {
    $errors[] = 'Password cannot be empty';
}

if (count($errors) > 0) {
    unset($_SESSION['errors']);
    $_SESSION['errors'] = $errors;
    header('Location: /Projekt-4D-G1/login.php');
    die();
}

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=4dti', 'root', '');
} catch(Exception $e) {
    echo $e->getMessage();
    return false;
}

/**************************\
|*  Get user account
\**************************/

// Create SQL query
$sql = <<<SQL
    SELECT u.Id, u.Name, u.Password, r.Id as RoleId, r.CanManage
    FROM Users u
    JOIN Roles r ON u.RoleId = r.Id
    WHERE u.Email = :email
    LIMIT 1;
SQL;

// prepare statement
$stmt = $db->prepare($sql);

$stmt->execute([
    ':email' => $email,
]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (password_verify($pass, $user['Password'])) {
    
    $_SESSION['id'] = $user['Id'];
    $_SESSION['name'] = $user['Name'];
    $_SESSION['role_id'] = $user['RoleId'];
    $_SESSION['can_manage'] = $user['CanManage'];

    header('Location: /4dti1/');

} else {
    $_SESSION['errors'][] = 'Incorrect credentials';
    header('Location: /Projekt-4D-G1/login.php');
}