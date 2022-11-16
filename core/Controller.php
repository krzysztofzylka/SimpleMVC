<?php

namespace core;

use core\exceptions\NotFoundException;

/**
 * Controller class
 */
class Controller {

    /**
     * Controller name
     * @var string
     */
    public string $name;

    /**
     * Load model
     * @param string $name model name
     * @return Model
     * @throws NotFoundException
     */
    public function loadModel(string $name) : Model {
        $modelObject = '\model\\' . $name;

        try {
            /** @var Model $model */
            $model = new $modelObject();
        } catch (\Exception) {
            throw new NotFoundException();
        }

        $model->name = $name;

        return $model;
    }

    /**
     * Load view
     * @param string $name view filename (without phtml)
     * @param array $variables view variables
     * @return void
     */
    public function loadView(string $name, array $variables = []) : void {
        $view = new View($name, $variables);
        $view->setControllerName($this->name);
        $view->render();
    }

}