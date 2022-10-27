<?php
class Blogpost {
    public string $title;
    public string $body;
    public string $created_at;
    public string $author;
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

    $result = $stmt->fetchAll(PDO::FETCH_CLASS, Blogpost::class);

    return $result ? $result : [];
}


class BlogpostSimple {
    public int $id;
    public string $title;
    public string $created_at;
    public string $author; 
}

/**
 * @return BlogpostSimple[]
 */
function getBlogpostsSimple(int $page): array {
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
            b.Id as id,
            b.Title as title, 
            b.CreatedAt as created_at, 
            u.Name as author
        FROM Blogposts b
        JOIN Users u ON b.AuthorId = u.Id
        LIMIT :skip, :take;
    SQL;

    // prepare statement
    $stmt = $db->prepare($sql);

    $offset = ($page - 1) * $per_page;

    $stmt->bindParam(':skip', $offset, PDO::PARAM_INT);
    $stmt->bindParam(':take', $per_page, PDO::PARAM_INT);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_CLASS, BlogpostSimple::class);

    return $result ? $result : [];
}

class BlogpostEdit {
    public int $id;
    public string $title;
    public string $body;
}

function getSingleBlogpostEdit(int $id): ?BlogpostEdit {
    try {
        $db = new PDO('mysql:host=127.0.0.1;dbname=4dti', 'root', '');
    } catch(Exception $e) {
        echo $e->getMessage();
        return null;
    }

    // Create SQL query
    $sql = <<<SQL
        SELECT 
            b.Id as id,
            b.Title as title,
            b.Body as body
        FROM Blogposts b
        WHERE b.Id = :id
        LIMIT 1;
    SQL;

    // prepare statement
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);

    $stmt->setFetchMode(PDO::FETCH_CLASS, BlogpostEdit::class);
    $stmt->execute();

    return $stmt->fetch();
}