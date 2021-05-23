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
            $this->driverDB=$container->driverDB;
    }
    
    //Получение объекта модели для текущего контроллера
    public function addModelController ($controller) {
                if(isset($controller) && !empty($controller)) {
                    $this->controller = $controller;
                }else {
                    throw new \Exception("Not set Controller");
                }
                
                $a = (new \ReflectionClass($controller));
                $name_controller = str_replace('Controller', '', $a->getShortName());
                $class_model = "\Model\\".$name_controller."Model";
                
                if($this->model instanceof $class_model){
                    return $this->model;
                }
                
                if(class_exists($class_model)){
                    return new $class_model($this->driverDB);
                }else {
                    throw new \Exception("Not Found Class ".$class_model);
                }
    }
}
