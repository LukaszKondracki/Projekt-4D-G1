<?php
session_start();

$title = $_POST['title'];
$body = $_POST['body'];

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
    INSERT INTO Blogposts (Title, Body, AuthorId) 
    VALUES (:title, :body, :author)
SQL;

// prepare statement
$stmt = $db->prepare($sql);

$result = $stmt->execute([
    ':title' => $title,
    ':body' => $body,
    ':author' => $_SESSION['id']
]);

echo $result;

header('Location: /4dti1/');

die();