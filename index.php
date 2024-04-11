<?php

//This is my CONTROLLER!


// Error Reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// Require the Autoload File
require_once ('vendor/autoload.php');

//instantiate the F3 Base Class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    echo '<h1>Dinner is served!</h1>';

//    $view = new Template();
//    echo $view->render('views/home.html');

});

//Run Fat-Free - invoking a method!
$f3->run();
