<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contact.css">

</head>
<body>

    <?php require 'elements/navigation.php'; ?>
    
    <form id="form" method="POST" action="src/register.php">

        <ul id="errors"></ul>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="input">

        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="input">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="input">

        <label for="agree">I agree to the privacy policy</label>
        <input type="checkbox" name="agree" id="agree" class="input">

        <input type="submit" value="Register" class="input">

    </form>

    <?php require 'elements/footer.php' ?>

    <script src="contact.js"></script>

</body>
</html>