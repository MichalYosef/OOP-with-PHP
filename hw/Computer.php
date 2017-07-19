<?php

class Computer extends ElectronicPart implements IElectronicPart {
    
    private $motherboard;
    private $processor;
    private $hardDrive;
    private $ram;
    private $graphicCard;
    
    
    public function __construct( $manufacturer, $price, $model, $motherboard,
                          $processor, $hardDrive, $ram, $graphicCard ) {
        
       
        $motherboard = $motherboard;
        $processor = $processor;
        $hardDrive = $hardDrive;
        $ram = $ram;
        $graphicCard = $graphicCard;
                
        parent::__construct( $manufacturer, $price, $model); 

    }

    public function getSpecs() {
                  
         return get_class( $this ) . " manufacturer: " . $this->getManufacturer() . 
         ", model: ".$this->getModel().", Price: ".$this->getPrice(); 
         
    }


    

   

}



?>