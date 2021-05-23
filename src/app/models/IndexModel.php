<?php

namespace Model;
use Core\Model\MainModel;

class IndexModel extends MainModel {
    
    public function getMessage () {
        return "IndexMOdel";
    }
    
    //Get user data from table use param login and password
    public function getFulltext() {
       $type = 'arraydata';
       $sql =   "SELECT * FROM `MyText` "     
       . "WHERE `id` = :id";
                $data_array=array(
                    'id' => 1,
                );
                $result =  $this->driver->query($sql, $type, $data_array); 
        return $result;  
    }
}
