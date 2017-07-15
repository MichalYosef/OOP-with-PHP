<?php

class purchase{

    private $screen;
    private $mouse;
    private $keyboard;
    private $computer;

    public function __construct($screen, $mouse, $keyboard, $computer){
    
        $this->screen = $screen;
        $this->mouse = $mouse;
        $this->keyboard = $keyboard;
        $this->computer = $computer;

    }
    
    function getFullPurchaseDetails(){

        return  $this->screen->getSpecs()."<br>".$this->mouse->getSpecs()."<br>".$this->keyboard->getSpecs()."<br>".$this->computer->getSpecs()."<br>";
        
    }
}



?>