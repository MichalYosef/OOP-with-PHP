<?php

class ElectronicPart implements IElectronicPart {
    private $manufacturer; 
    private $price; 
    private $model; 

    public function __construct($manufacturer, $price, $model ) {
        $this->model = $model; 
        $this->price = $price; 
        $this->manufacturer = $manufacturer; 
    }

    function getSpecs() {
                  
         return get_class( $this ) . " manufacturer: " . $this->getManufacturer() . 
         ", model: ".$this->getModel().", Price: ".$this->getPrice(); 
         
    }

    function getModel() {
        return $this->model; 
    }

    function getPrice() {
        return $this->price; 
    }

    function getManufacturer() {
        return $this->manufacturer; 
    }
}


?>