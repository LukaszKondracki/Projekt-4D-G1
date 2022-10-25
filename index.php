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
            echo '<pre>'.json_encode($blogs, JSON_PRETTY_PRINT).'</pre>';
        ?>

        <article>
            <h2>Lorem Ipsum</h2>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed libero ligula, semper eu tincidunt ut, faucibus id tortor. Nulla at nisi ut quam pulvinar sodales. Sed ullamcorper nulla congue, iaculis ligula sit amet, pharetra felis. Donec sollicitudin, turpis ac vestibulum scelerisque, ex magna scelerisque erat, et congue elit arcu sit amet eros. In volutpat placerat enim, a pellentesque turpis gravida et. Pellentesque eu sodales nunc. Fusce maximus augue libero, ut facilisis urna auctor in. Nunc id velit venenatis, semper eros in, fermentum elit. Curabitur lectus dolor, rhoncus sit amet ante eu, tristique vehicula quam. Maecenas dictum nisi sed enim hendrerit, non posuere justo mattis. Sed laoreet laoreet mauris id sodales. Donec semper vel felis et tristique. Aliquam imperdiet nibh eget augue egestas pellentesque.

            Cras ut varius nibh, at finibus nunc. Donec nec urna sit amet velit viverra rhoncus eu eget nunc. Mauris pulvinar vehicula orci, sit amet varius purus rhoncus id. Curabitur convallis, dolor ut accumsan dignissim, velit eros consectetur nunc, non dignissim felis diam id enim. Sed leo nisl, pharetra in rhoncus sit amet, cursus in risus. Sed condimentum, massa euismod molestie tincidunt, velit purus vestibulum mauris, quis efficitur nibh lacus id nulla. Ut non malesuada enim, id placerat felis. Praesent congue neque lectus, a iaculis elit rhoncus ut.

            Integer tempor posuere urna et ultricies. Nunc viverra mauris at lectus condimentum rhoncus sit amet quis quam. Morbi scelerisque nisl enim, a imperdiet dui interdum a. Curabitur euismod dignissim risus ac vestibulum. Nunc lorem nisi, rhoncus non volutpat vel, suscipit ac nisi. Integer in libero fermentum, mattis lectus a, vestibulum tellus. Praesent ullamcorper lectus ut lectus accumsan, vitae lobortis ipsum dapibus.
        </article>
    </main>

    <?php require 'elements/footer.php' ?>
</body>
</html>