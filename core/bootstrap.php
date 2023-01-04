<?php

$app=[];

//to performe behinde the seen process
$app['config'] = require 'config.php';


require 'core/Router.php';
require 'core/request.php';
require 'core/database/connection.php';
require 'core/database/QueryBuilder.php';


//create object for 'QueryBuilder' class
$app['database'] =  new QueryBuilder(
    connection::make($app['config']['database'])
);