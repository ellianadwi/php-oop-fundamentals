<?php

/**
 * Create a hash
 * @param string $tring
 * @return string
 */
function getHash($string)
{
    return hash('sha256', $string);
}