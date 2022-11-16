<?php

namespace core\exceptions;

/**
 * Not found exception
 */
class NotFoundException extends \Exception {

    public function __construct() {
        parent::__construct('Object not found.', 404);
    }

}