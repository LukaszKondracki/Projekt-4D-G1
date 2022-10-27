<?php 
    session_start();

    if ( ! isset($_SESSION['id'])) {
        die('User not logged in');
    }
    if ( ! $_SESSION['can_manage']) {
        die('Insufficient permissions');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add blgpost</title>

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../contact.css">
</head>
<body>
    
    <?php require '../elements/navigation.php'; ?>

    <main id="content" class="panel">
        <table>
        <?php
            require '../src/blogposts.php';
            $blogs = getBlogpostsSimple(1);
            foreach($blogs as $blog):
        ?>

        <tr>
            <td><?=$blog->title?></td>
            <td><?=$blog->author?></td>
            <td><?=$blog->created_at?></td>
            <td>
                <a href="edit_blogpost.php?id=<?=$blog->id?>">Edit</a>
                <a href="delete_blogpost.php?id=<?=$blog->id?>">Delete</a>
            </td>
        </tr>

        <?php endforeach; ?>
        </table>
    </main>

    <?php require '../elements/footer.php' ?>
</body>
</html>