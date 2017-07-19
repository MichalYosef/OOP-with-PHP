<?php

class Screen extends ElectronicPart implements IElectronicPart {
    
    private $size; 
    private $panel; 
    
    
    public function __construct( $manufacturer, $price, $model, $size=	13, $panel="" ) {
        
        $this->size = $size; 
        $this->panel = $panel; 
        
        parent::__construct( $manufacturer, $price, $model); 

    }

    public function getSpecs() {
                  
         return get_class( $this ) . " manufacturer: " . $this->getManufacturer() . 
         ", model: ".$this->getModel().", Price: ".$this->getPrice(); 
         
    }

   
    function getsize() {
        return $this->size; 
    }

    function getPanel() {
        return $this->panel; 
    }

}



?>