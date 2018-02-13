<?php

// $tasks = $app['database']->selectAll('todos');

$app['database']->emptyTable('badPasswords');

$badPasswordsArray = ['testing123', '12345678', 'password', 'ilikeapples', 'dogsarecool', 'catsarenotcool', 'disneyland', 'halloween', 'happybirthday', 'justkidding'];

foreach ($badPasswordsArray as $badPassword) {
    $app['database']->insert('badPasswords', [
      'password' => $badPassword
    ]);
}

require 'views/index.view.php';
