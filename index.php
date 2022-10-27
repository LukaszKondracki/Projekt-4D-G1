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
            <?php if(isset($_SESSION['name'])): ?>
                <li class="side-nav-item">
                    Hello, <?=$_SESSION['name']; ?>!
                </li>
            <?php else: ?>
                <li class="side-nav-item">
                    <a href="login.php">Log in</a>
                </li>
                <li class="side-nav-item">
                    <a href="register.php">Register</a>
                </li>
            <?php endif; ?>

            <?php if (isset($_SESSION['can_manage']) && $_SESSION['can_manage']): ?>
                <li class="side-nav-item">
                    <a href="admin">Admin</a>
                </li>
            <?php endif; ?>

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
            <span style="color: <?=$blog->role_color?>"><?=$blog->author?></span>
            <span> on </span>
            <time date="<?=$blog->created_at?>"><?=$blog->created_at?></time>
            <div><?=$blog->body?></div>
        </article>

        <?php endforeach; ?>
    </main>

    <?php require 'elements/footer.php' ?>
</body>
</html>