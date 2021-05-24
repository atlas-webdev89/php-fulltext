<?php

namespace Controller;
use Core\Controller\DisplayController;

class TextsController extends DisplayController{
    
    public function __construct($container) { 
            parent::__construct($container);
        $this->model = $this->addModelController(__CLASS__);
    }
    
    public function execute($request, $response, $args) {
        
        //Получаем id текста из uri
        $this->id = $args['id'];
        
        $this->title_page .= " | SingleText";
        $this->title_block = "Текст...";
        $this->SingleText = $this->getText($this->id);
        if(!$this->SingleText) {
            throw new \Slim\Exception\NotFoundException($request, $response);
        }
        
        $this->main_section = $this->mainBar();
        return $this->display($request, $response, $args);
    }
    
    public function getText($id) {
        return $this->model->getText($id);
    }
    public function mainBar () {
          return $this->view->fetch('template_single_text.php', 
                                                        [   
                                                            "title_block" => $this->title_block, 
                                                            "single_text" => $this->SingleText,
                                                        ]);       
    }
}
