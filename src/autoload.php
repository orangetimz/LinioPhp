<?php 

// Autoload required classes.
\spl_autoload_register(function($class_name) {
    include_once($class_name . '.php');
});
