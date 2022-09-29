<?php
    class NavItem {
        public string $name;
        public string $url;

        function __construct($name, $url) {
            $this->name = $name;
            $this->url = $url;
        }
    }

    $items = [
        new NavItem('Home', 'index.php'),
        new NavItem('Contact', 'contact.php'),
        new NavItem('Comments', 'comments.php'),
    ]
?>

<nav id="nav" class="panel">
    <ul class="nav-list">
        <li class="nav-item">
            <img src="" alt="">
        </li>

        <?php foreach($items as $i): ?>
            <li class="nav-item">
                <a href="<?=$i->url?>"><?=$i->name?></a>
            </li>
        <?php endforeach; ?>

    </ul>
</nav>