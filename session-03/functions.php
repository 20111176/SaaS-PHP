<?php

/** commonly used functions */

/**
 * Welcoming Greeting
 * 
 * This does not a lot
 * 
 * @param string $name
 * @return string|bool
 */


if (!defined('greeting')) {
    function greeting(string $name): string|bool
    {
        // if ($name === "") {
        //     return false;
        // }
        // return "<p>Hello, $name</p>";

        // version 2
        return $name === "" ? false : "<p>Hello, $name</p>";
    }
}


// run lazy code
if (!defined('e')) {
    function e($variable)
    {
        echo "<p>$variable</p>";
    }
}
