<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contact.css">

</head>
<body>

    <?php require 'elements/navigation.php'; ?>
    
    <form id="form" method="POST" action="">

        <ul id="errors"></ul>

        <?php
        require 'src/database.php';

        if (!empty($_POST)) {

            echo "<span class='thanks'>Thank you for contacting us, {$_POST['name']}</span>";
            
            $res = save_pdo($_POST['name'], $_POST['email'], $_POST['body']);
            echo $res;
        }
        ?>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="input">

        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="input">

        <label for="body">Body</label>
        <textarea name="body" id="body" cols="30" rows="10" class="input"></textarea>

        <label for="agree">I agree to the privacy policy</label>
        <input type="checkbox" name="agree" id="agree" class="input">

        <input type="submit" value="Send" class="input">

    </form>

    <?php require 'elements/footer.php' ?>

    <script src="contact.js"></script>

</body>
</html>