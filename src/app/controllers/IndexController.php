<?php

namespace Controller;
use Core\Controller\DisplayController;

class IndexController extends DisplayController{
    
    public function execute($request, $response, $args) {
        return $this->display($request, $response, $args);
    }
    
     protected function display($request, $response, $args) {
            $this->view->render($response, 'index.php');   
        } 
}
