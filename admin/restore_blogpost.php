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
    <title>Restore blgpost</title>

    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="../contact.css">
</head>
<body>
    
    <?php require '../elements/navigation.php'; ?>

    <?php
        require '../src/blogposts.php';
        $blog = getSingleBlogpostDelete($_GET['id']);
    ?>

    <main id="content">
        
        <dl>
            <dt>Title</dt>
            <dd><?=$blog->title?></dd>

            <dt>Author</dt>
            <dd><?=$blog->author?></dd>

            <dt>Body</dt>
            <dd><?=$blog->body?></dd>

            <dt>Created at</dt>
            <dd><?=$blog->created_at?></dd>

            <dt>Deleted at</dt>
            <dd><?=$blog->created_at?></dd>

            <dt>Last edited</dt>
            <dd><?=$blog->edited_at ?? 'never'?></dd>
        </dl>

        <form action="src/restore_blogpost.php" method="POST">
            <input name="id" type="hidden" value="<?=$blog->id?>">
            <input type="submit" value="Restore blogpost">
        </form>
    </main>

    <?php require '../elements/footer.php' ?>
</body>
</html>