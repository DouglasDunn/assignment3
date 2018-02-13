<?php

echo $_POST['badPasswords'];
$badPasswordsArray =  explode(" ", $_POST['badPasswords']);
var_dump($badPasswordsArray);
foreach ($badPasswordsArray as $badPassword) {
    $app['database']->insert('badPasswords', [
      'password' => $badPassword
    ]);
}
