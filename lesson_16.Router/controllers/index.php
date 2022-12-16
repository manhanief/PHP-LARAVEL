<?php

echo 'hello world';

$tasks = $app['database']->selectAll('todo');

require 'view/index.view.php';
