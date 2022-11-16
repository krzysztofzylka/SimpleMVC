<?php

namespace core;

use core\exceptions\NotFoundException;

/**
 * Kernel class
 */
class Kernel {

    /**
     * Load controller
     * @param string $controllerName controller name
     * @param string $controllerMethod controller method
     * @param array $controllerArgs controller arguments
     * @return void
     * @throws NotFoundException
     */
    public function loadController(string $controllerName, string $controllerMethod = 'index', array $controllerArgs = []) : void {
        $controllerObject = '\controller\\' . $controllerName;

        try {
            /** @var Controller $controller */
            $controller = new $controllerObject();
        } catch (\Exception) {
            throw new NotFoundException();
        }

        $controller->name = $controllerName;

        if (!method_exists($controller, $controllerMethod)) {
            throw new NotFoundException();
        }

        try {
            call_user_func_array([$controller, $controllerMethod], $controllerArgs);
        } catch (\Exception) {
            throw new NotFoundException();
        }
    }

}