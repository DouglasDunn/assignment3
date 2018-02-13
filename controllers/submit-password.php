<?php

$errorMessage = "";
$index = 0;

if (strlen($_POST['password']) < 8) {
    $errorMessage = "Your password has to be more than 7 characters.";
}

$badPasswordsArray = $app['database']->selectAll('badPasswords');

foreach ($badPasswordsArray as $badPassword) {
    $castedBadPassword = (array) $badPassword;

    if ($castedBadPassword['password'] == $_POST['password']) {
        $errorMessage = "Your password is a bad password.";
    }
}

if ($errorMessage != "") {
    require 'views/login-error.view.php';
} else {
    $app['database']->insert('passwords', [
      'password' => $_POST['password']
    ]);

    require 'views/login-success.view.php';
}
