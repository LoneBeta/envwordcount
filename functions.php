<?php

namespace ENVWordCount;

function autoloader($class)
{
    $parts = explode('\\', $class);
    $class = join("/",$parts);
    require '/home/ENVWordCount/classes/' . $class . '.class.php';
}
spl_autoload_register('GVPortal\Base\autoloader');