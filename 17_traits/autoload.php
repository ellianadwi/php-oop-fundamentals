<?php

/**
 * Let's require our helper file with helper functions here
 */
require 'Helper.php';

/**
 * PSR-0 autoloader
 *@param string $className
 */
function autoload($className)
{
    $className = ltrim($className, '\\');
    $filename  = '';
    $namespace = '';
    if($lastNsPos  = sttrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;

    }
    $filename .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
}

/**
 * register the PSR-0 autoloader
 */
spl_autoload_register('autoload');