<?php
//** Functions ... */

// include "functions.php"; // include the file, but warn if missing
// include_once "functions.php"; // only include the file once, warn if missing
require 'functions.php'; // MUST include the file, error out if missing
require_once 'functions.php'; // MUST include the file once, error out if missing


echo greeting("Evelyn");
echo greeting("");
echo greeting(true);
echo greeting(false);

$name = "Fred 😊";
e($name);
e(strtolower(($name)));
e(mb_strtolower($name)); // use this one rather than strtolower
e(strlen($name));
e(mb_strlen($name)); // prefer to use mb_ 
