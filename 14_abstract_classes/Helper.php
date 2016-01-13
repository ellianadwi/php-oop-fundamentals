<?php

/**
 * Create a hash
 * @param string $string
 * @return string
 */
function getHash($string){
    returnhash('sha256', $string);
}