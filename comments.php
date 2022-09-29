<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    
    <?php require 'elements/navigation.php'; ?>

    <form action="" method="get" id="form">
        <label for="name">Name</label>
        <input id="name" type="text" class="input">

        <label for="body">Comment</label>
        <textarea name="body" id="body" class="input" cols="30" rows="10"></textarea>

        <input type="submit" value="Send comment" class="input">
    </form>

    <?php require 'elements/footer.php' ?>
    
    <script src="comments.js"></script>
</body>
</html>