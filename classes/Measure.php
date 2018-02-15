<?php
namespace classes;

class Measure { // instanciation de la class user//
    public $id;
    public $temperature;
    public $humidite;
    
    
    public function __construct($temperature, $humidite) { // fonction __construct avec param //
        
        $this->temperature = $temperature; // $this-> : cet objet ! email : attribut de User est égale à $email : param fonction construct //
        
        $this->humidite = $humidite;// $this sert a attribuer une valeur //
        
        
    }
    
    
}

?>
