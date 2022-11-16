<?php

namespace model;

use core\Model;

/**
 * Example model
 */
class example extends Model {

    /**
     * Example model method
     * @return string
     */
    public function getString() : string {
        return 'Example string from model';
    }

}