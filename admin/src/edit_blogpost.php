<?php
$title = $_POST['title'];
$body = $_POST['body'];
$id = $_POST['id'];

/**********************************************\
|*              BAZA DANYCH                   *|
\**********************************************/

try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=4dti', 'root', '');
} catch(Exception $e) {
    echo $e->getMessage();
    die();
}

// Create SQL query
$sql = <<<SQL
    UPDATE Blogposts b
    SET b.Title = :title, b.Body = :body, b.EditedAt = CURRENT_TIMESTAMP
    WHERE b.Id = :id
SQL;

// prepare statement
$stmt = $db->prepare($sql);

$result = $stmt->execute([
    ':title' => $title,
    ':body' => $body,
    ':id' => $id
]);

header('Location: /4dti1/');

die();