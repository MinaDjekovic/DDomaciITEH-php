<?php

class Broker{
    private $rezultat;
    private $mysqli;
    private static $broker;
   
    public function getMysqli(){
        return $this->mysqli;
    }
    private function __construct(){
        $this->mysqli = new mysqli("localhost", "root", "", "prodavnica");
        $this->mysqli->set_charset("utf8");
    }

    public static function getBroker(){
        if(!isset($broker)){
            $broker=new Broker();
        }
        return $broker;
    }
    
    function izvrsiUpit($upit){
        return $this->mysqli->query($upit);
        
    }
    
   
}

?>
