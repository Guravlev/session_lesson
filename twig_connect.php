<?php
require_once "Twig/Autoloader.php";
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('includes');

$twig = new Twig_Environment($loader, array(
                            'cache' => 'vendor/compilation_cache',
                            'auto_reload' => true));