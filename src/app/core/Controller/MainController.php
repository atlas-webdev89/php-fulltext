<?php


namespace Core\Controller;

abstract class MainController {
    
    protected $model;
    protected $view;
    protected $container;
    protected $uri;
    protected $title;
    protected $menu;

    public function __construct($container) { 
            $this->container = $container;
            $this->view=$container->view;   
    }
}
