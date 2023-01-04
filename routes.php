<?php


$router->get('jefry', 'controllers/index.php');
$router->get('jefry/about', 'controllers/about.php');
$router->get('jefry/about/culture', 'controllers/contact.php');
$router->post('jefry/names', 'controllers/add-name.php');
