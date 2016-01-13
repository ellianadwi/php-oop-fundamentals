<?php

//Require psr-0 autoloader
require 'autoload.php';

$post = new stdClass();
$post->title = 'My title';

//Static function call
//Debug::dump($post);
// echo Debug::$foo;

//Create an instance and cho $wrapperStart
$dumper = new Debug();
$dumper::$wrapperStart = 'New value';
echo $dumper::$wrapperStart;

/**
 * A class with static functions and method
 */
class Debug {

    static $wrapperStart = '<pre>';
    static $wrapperEnd = '</pre>';
    static $foo = 'Bar' ;

    static public function dump($var) {
        echo self::$wrapperStart;
        var_dump($var);
        echo self::$wrapperEnd;
    }
}