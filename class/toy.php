<?php

require_once __DIR__.'/prodotto.php';
require_once __DIR__.'../traits/hasWeight.php';

class cibo extends prodotto {

    use HasWeight;
    

    public function __construct(
        $marca,
        $prezzo,
        $provenienza,
        $weight = null

    )
    {
        parent::__construct($marca, $prezzo, $provenienza);
        $this->weight = $weight;
    }


    
}