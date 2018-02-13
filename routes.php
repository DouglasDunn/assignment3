<?php

$router->get('', 'controllers/index.php');
$router->post('submit', 'controllers/submit-password.php');
$router->post('badPasswords', 'controllers/submit-badPasswords.php');
