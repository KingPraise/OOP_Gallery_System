<?php
function classAutoLoader($class)
{
    $class = strtolower($class);
    $the_path  = "includes/{$class}.php";
    file_exists($the_path) && !class_exists($class) ? include($the_path) : die("This File name {class}.php was not found.....");
}
spl_autoload_register("classAutoLoader");



function redirect($location)
{
    header("Location: {$location}");
}