<?php

namespace Controller;
use Core\Controller\DisplayController;

class IndexController extends DisplayController{
    
    public $model;
    public function __construct($container) { 
            parent::__construct($container);
        $this->model = $this->addModelController(__CLASS__);
    }
    
    public function execute($request, $response, $args) {
        return $this->display($request, $response, $args);
    }
    
    protected function display($request, $response, $args) {
            $this->title_page .= " | Search";
            $this->title_block = "Полнотекстнный поиск ...";
            //$this->getFulltext();
            $this->message = $this->message();     
        parent::display($request, $response, $args);
        } 
        
    protected function  message () {
        return $this->model->getMessage();
    }
    
    protected function getFulltext () {
            print_r($this->model->getFulltext());
        exit;
    }
}
