<?php
session_start();
require 'core/bootstrap.php';

require 'routes.php';

$uri = $_GET['uri'] ?? '';

require $router->parse($uri);