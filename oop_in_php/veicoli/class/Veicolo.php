<?php
/**
 * - npasseggeri
   - motore  
- serbatoio
- carburante
- sposta(spostamento)
 */
class Veicolo {

    /**
     * @var int npasseggeri numero di persone max trasportabili
     */
    private  $npasseggeri;
    private  $motore;
    private $serbatoio;
    private $carburante;
    private $posizione = 0;
    

    public function __construct($motore, $serbatoio, $npasseggeri)
    {
        $this->motore = $motore;
        $this->serbatoio = $serbatoio;
        $this->carburante = 0;
        $this->npasseggeri = $npasseggeri;
        // $this->posizione = 0;
    }

    // setPosizione
    public function sposta(float $spostamento):float
    {
        if($this->carburante !== 0){
            $this->posizione += $spostamento;
            $this->carburante -= $spostamento; 
        }
        return $this->posizione;
    }

    // setCarburante
    public function rifornimento(float $carburante) {
        if($this->serbatoio < $carburante){
            return new Exception('Troppa benzina');
        }
    }

    public function getSerbatoio():float {
    
        return $this->serbatoio;
    }

    public function getNPasseggeri():int {
    
        return $this->npasseggeri;
    }

    public function getMotore()
    {
        return $this->motore;
    }

}

