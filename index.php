<?php
require('core/Autoload.php');

try {
    $kernel = new \core\Kernel();
    $kernel->loadController('example');
} catch (\core\exceptions\NotFoundException) {
    die('Error 404');
}