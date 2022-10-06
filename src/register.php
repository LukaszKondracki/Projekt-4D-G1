<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = password_hash($_POST['password'], PASSWORD_ARGON2ID);

echo '<br>';
echo "{$_POST['password']}<br>";
echo $pass;