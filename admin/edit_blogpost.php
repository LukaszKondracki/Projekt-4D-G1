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

    <?php
        require '../src/blogposts.php';
        $blog = getSingleBlogpostEdit($_GET['id']);
    ?>

    <form action="src/edit_blogpost.php" method="post" id="form">
        <label for="title">Title</label>
        <input id="title" name="title" type="text" class="input" value="<?=$blog->title?>">

        <label for="body">Body</label>
        <textarea name="body" id="body" class="input" cols="30" rows="10"><?=$blog->body?></textarea>

        <input type="hidden" name="id" value="<?=$blog->id?>">

        <input type="submit" value="Save post" class="input">
    </form>

    <?php require '../elements/footer.php' ?>
</body>
</html>