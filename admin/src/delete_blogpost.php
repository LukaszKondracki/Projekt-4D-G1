<?php
$id = $_POST['id'];

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
    UPDATE Blogposts b
    SET b.DeletedAt = CURRENT_TIMESTAMP
    WHERE b.Id = :id
SQL;

// prepare statement
$stmt = $db->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

$result = $stmt->execute();

echo $result;

header('Location: /4dti1/');

die();