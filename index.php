<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php require 'elements/navigation.php'; ?>
    
    <nav id="side-nav" class="panel">
        <ul class="side-nav-list">
            <li class="side-nav-item">
                Hello, <?=$_SESSION['name']; ?>!
            </li>
            <li class="side-nav-item">
                <a href="">rty</a>
            </li>
            <li class="side-nav-item">
                <a href="">uio</a>
            </li>
            <li class="side-nav-item">
                <a href="">pas</a>
            </li>
        </ul>
    </nav>

    <main id="content" class="panel">
        <h1>My website</h1>

        <?php
            require 'src/blogposts.php';
            $blogs = getBlogposts(1);
            foreach($blogs as $blog):
        ?>

        <article>
            <h2><?=$blog->title?></h2>
            <time date="<?=$blog->created_at?>"><?=$blog->created_at?></time>
            <?=$blog->body?>
        </article>

        <?php endforeach; ?>
    </main>

    <?php require 'elements/footer.php' ?>
</body>
</html>