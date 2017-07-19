<?php

class Keyboard extends ElectronicPart implements IElectronicPart {
    
    private $isWired; 
    
    
    
    public function __construct( $manufacturer, $price, $model, $isWired=false ) {
        
        $this->isWired = $isWired; 
                
        parent::__construct( $manufacturer, $price, $model); 

    }

    public function getSpecs() {
                  
         return get_class( $this ) . " manufacturer: " . $this->getManufacturer() . 
         ", model: ".$this->getModel().", Price: ".$this->getPrice(); 
         
    }


    function getisWired() {
        return $this->isWired; 
    }

   

}



?>