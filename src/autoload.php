<?php
spl_autoload_register(function($className) {
    $classFile = realpath(__DIR__."/../".str_replace(array('\\', '_'), DIRECTORY_SEPARATOR, $className). '.php');

    if (file_exists($classFile)) {
        require_once $classFile;
    }

});
