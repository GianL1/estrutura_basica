<?php 
session_start();

require "vendor/autoload";
require "config.php";

$core = new \Core\Core();
$core->run();