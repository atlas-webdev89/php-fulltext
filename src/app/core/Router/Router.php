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
                $app->map(['GET', 'POST'], '/', '\Controller\IndexController:execute')->setName('home');
                $app->get('/text/id/{id}', '\Controller\TextsController:execute')->setName('text');
    }
}
