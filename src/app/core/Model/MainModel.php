<?php

namespace Core\Model;

class MainModel {
    
    public function __construct($driver) {
        if(isset($driver)) {
            $this->driver = $driver;
        }else {
            throw new \Exception("Not Found Driver for model");
        }
    }
}
