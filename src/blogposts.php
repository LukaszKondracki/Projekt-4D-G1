<?php
class Blogpost {
    public string $title;
    public string $body;
    public string $created_at;
    public string $author;
    public string $role;
    public string $role_color;  
}

/**
 * @return Blogpost[]
 */
function getBlogposts(int $page): array {
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=4dti', 'root', '');
    } catch(Exception $e) {
        echo $e->getMessage();
        return [];
    }

    $per_page = 10;

    // Create SQL query
    $sql = <<<SQL
        SELECT 
            b.Title as title, 
            b.Body as body, 
            b.CreatedAt as created_at, 
            u.Name as author, 
            r.Name as role, 
            r.Color as role_color
        FROM Blogposts b
        JOIN Users u ON b.AuthorId = u.Id
        JOIN Roles r ON u.RoleId = r.Id
        LIMIT :skip, :take;
    SQL;

    // prepare statement
    $stmt = $db->prepare($sql);

    $offset = ($page - 1) * $per_page;

    $stmt->bindParam(':skip', $offset, PDO::PARAM_INT);
    $stmt->bindParam(':take', $per_page, PDO::PARAM_INT);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_CLASS, 'Blogpost');

    return $result ? $result : [];
}