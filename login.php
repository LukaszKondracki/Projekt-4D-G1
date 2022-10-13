<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contact.css">

</head>
<body>

    <?php require 'elements/navigation.php'; ?>
    
    <form id="form" method="POST" action="src/login.php">

        <ul id="errors">
            <?php foreach ($_SESSION['errors'] ?? [] as $e): ?>
                <li><?=$e?></li>
            <?php endforeach; ?>
            <?php unset($_SESSION['errors']);?>
        </ul>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="input">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="input">

        <input type="submit" value="Log In" class="input">

    </form>

    <?php require 'elements/footer.php' ?>

    <!-- <script src="contact.js"></script> -->

</body>
</html>