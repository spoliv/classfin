<?php

require 'boot.php';

// http://classtest/?r=news/all
$route = $_GET['r'];
$routeParts = explode('/', $route);
$controllerClassName = ucfirst($routeParts[0]) . 'Controller';
$actionName = $routeParts[1];
/*var_dump($controllerClassName);*/
$controller = new $controllerClassName;
$controller -> action($actionName);