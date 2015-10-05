<?php

function __autoload ($class)
{
    require 'models/' . $class . '.php';

}

/*require_once __DIR__ . '/models/news.php';*/

/*require_once __DIR__ . '/models/Articles.php';*/