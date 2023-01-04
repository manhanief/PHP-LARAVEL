<?php

$tasks = $app['database']->selectAll('todo');

require 'view/index.view.php';


