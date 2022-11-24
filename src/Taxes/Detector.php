<?php

namespace App\Taxes;

class Detector {

    protected $prix;
    protected $montant;

    public function __construct(float $montant) {
        $this->montant = $montant;
    }
    
    public function detecte(float $prix): bool{
        if ($prix > $this->montant) {
            return true;
        }else if ($prix <= $this->montant){
            return false;
        }
        
    }
}