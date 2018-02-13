<?php
//var_dump(die('hi'));

$errorArray = array();
$index = 0;

if (strlen($_POST['password']) < 8) {
    $errorArray[$index++] = "Too short";
    var_dump($errorArray);
}

echo $_POST['password'];
echo "<br>";
echo count($_POST['password']);

die();

$app['database']->insert('badPasswords', [
  'password' => $_POST['password']
]);
//var_dump(die('hi'));
header('Location: /');
