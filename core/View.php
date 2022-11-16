<?php

namespace core;

/**
 * View class
 */
class View {

    /**
     * View name
     * @var string
     */
    private string $viewName;

    /**
     * View variables
     * @var array
     */
    private array $variables;

    /**
     * Controller name
     * @var string
     */
    private string $controllerName;

    /**
     * Initialize view
     * @param string $viewName
     * @param array $variables
     */
    public function __construct(string $viewName, array $variables = []) {
        $this->viewName = $viewName;
        $this->variables = $variables;
    }

    /**
     * Change controller name
     * @param string $name controller name
     * @return void
     */
    public function setControllerName(string $name) : void {
        $this->controllerName = $name;
    }

    /**
     * Render view
     * @return void
     */
    public function render() : void {
        foreach ($this->variables as $name => $value) {
            ${$name} = $value;
        }

        include('./view' . DIRECTORY_SEPARATOR . $this->controllerName . DIRECTORY_SEPARATOR . $this->viewName . '.phtml');
    }

}