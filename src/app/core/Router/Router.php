<?php


namespace Core\Router;



class Router {
    
   protected $app;
   protected $container;
   
   public function __construct($container) {
       $this->container = $container;
   }
   
    public function createRoutes($app) {
                //Группа маршрутов для пользовательской части
                $app->get('/', '\Controller\IndexController:execute')->setName('home');
                //Группа маршрутов для пользовательской части
                $app->get('/h', '\Controller\IndexController:execute')->setName('home');
    }
}
