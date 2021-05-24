<?php

namespace Model;
use Core\Model\MainModel;

class TextsModel extends \Core\Model\MainModel{
    
    public function getText($id) {
        $type = 'arraydata';
        $sql =   "SELECT * FROM MyText WHERE id = :id";     
            $data_array=array(
                     'id' => $id,
                 );
            $result =  $this->driver->query($sql, $type, $data_array); 
        return $result;  
    }
}
