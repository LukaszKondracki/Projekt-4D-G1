<?php session_start(); ?>

<?php
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
    <title>Admin</title>

    <link rel="stylesheet" href="../styles.css">
</head>
<body>

    <?php require '../elements/navigation.php'; ?>
    
    <nav id="side-nav" class="panel">
        <ul class="side-nav-list">
            <li class="side-nav-item">
                Hello, <?=$_SESSION['name']; ?>!
            </li>
            <li class="side-nav-item">
                <a href="add_blogpost.php">Add blogpost</a>
            </li>
            <li class="side-nav-item">
                <a href="">Manage blogposts</a>
            </li>
            <li class="side-nav-item">
                <a href="">Manage users</a>
            </li>
        </ul>
    </nav>

    <main id="content" class="panel">

    </main>

    <?php require '../elements/footer.php' ?>
</body>
</html>