<?php

namespace Model;
use Core\Model\MainModel;

class IndexModel extends MainModel {
    
    //Get user data from table use param login and password
    public function getFulltext($search) {
       $type = 'arraydata';
       $sql =   "SELECT * FROM MyText WHERE MATCH (text) AGAINST (:search) LIMIT 10";     
            $data_array=array(
                     'search' => $search,
                 );
            $result =  $this->driver->query($sql, $type, $data_array); 
        return $result;  
    }
}
