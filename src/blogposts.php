<?php
class Blogpost {
    public string $title;
    public string $body;
    public DateTime $created_at;
    public string $author;
    public string $role;
    public string $role_color;
    
    public function __construct(
        string $title, 
        string $body, 
        DateTime $created_at, 
        string $author, 
        string $role, 
        string $role_color
    ) {
        $this->$title = $title;
        $this->$body = $body;
        $this->$created_at = $created_at;
        $this->$author = $author;
        $this->$role = $role;
        $this->$role_color = $role_color;
    }    
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
        SELECT b.Title, b.Body, b.CreatedAt as created_at, u.Name as author, r.Name as role, r.Color as role_color
        FROM Blogposts b
        JOIN Users u ON b.AuthorId = u.Id
        JOIN Roles r ON u.RoleId = r.Id
        SKIP :s
        TAKE :t;
    SQL;

    // prepare statement
    $stmt = $db->prepare($sql);

    $stmt->execute([
        ':s' => ($page - 1) * $per_page,
        ':t' => $per_page
    ]);

    echo json_encode($db->errorInfo(), JSON_PRETTY_PRINT);

    return $stmt->fetch(PDO::FETCH_ASSOC);
}