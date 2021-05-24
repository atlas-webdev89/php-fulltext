<?php

namespace Core\Controller;

class DisplayController extends MainController{
    public $title_page;
    public function __construct($container) { 
            parent::__construct($container);
            $this->title_page = "Page";
    }
    
    protected function display($request, $response, $args) {
            $this->view->render($response, 'index.php',
                    [
                        "title_page" => $this->title_page, 
                        "main_section" => $this->main_section,
                    ]
                );  
        } 
}
