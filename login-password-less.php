<?php
require_once('plugins/login-password-less.php');

$password = getenv('PASSWORD');

if ($password === false) {
    throw new Exception('PASSWORD environment variable is not set.');
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);

return new AdminerLoginPasswordLess($password_hash);
