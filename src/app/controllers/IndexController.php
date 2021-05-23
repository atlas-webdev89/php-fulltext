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
        //Получение POST запроса при редактировании точки
            if ($request->isPost()) {
                $search = $request->getParsedBody();
                    if($data = $this->getFulltext($search['search_text'])) {
                        return json_encode(
                                    [
                                        'data' => $data,
                                        'status' => true,
                                    ]
                                );
                    }else {
                        return json_encode(
                                    [
                                        'data' => 'Not Found',
                                        'status' => false,
                                    ]
                                );
                    }
            }
        return $this->display($request, $response, $args);
    }
    
    protected function display($request, $response, $args) {
                $this->title_page .= " | Search";
                $this->title_block = "Полнотекстнный поиск ...";
                //$this->getFulltext();
            parent::display($request, $response, $args);
        } 
    
    protected function getFulltext ($search) {
             return $this->model->getFulltext($search);
    }
}
