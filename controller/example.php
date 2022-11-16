<?php

namespace controller;

use core\Controller;

/**
 * Example controller
 */
class example extends Controller {

    /**
     * Default method
     * @return void
     * @throws \core\exceptions\NotFoundException
     */
    public function index() : void {
        $exampleModel = $this->loadModel('example');

        $this->loadView(
            'index',
            [
                'var' => 'Example variable',
                'modelString' => $exampleModel->getString()
            ]
        );
    }

}