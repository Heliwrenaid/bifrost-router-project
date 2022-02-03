<?php
//session_start();
require 'vendor/autoload.php';

$router = new BifrostRouter\BifrostRouter(DEVELOPMENT_MODE);
$router->start();
