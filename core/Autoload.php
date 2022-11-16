<?php

spl_autoload_register(
    function ($class_name) {
        $fileName = $class_name . '.php';
        $fileName = str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $fileName);

        include($fileName);
    }
);