<?php

require_once __DIR__.'/prodotto.php';
require_once __DIR__.'../traits/hasWeight.php';

class cibo extends prodotto {

    public $ingredienti;
    use HasWeight;
    

    public function __construct(
        $marca,
        $prezzo,
        $provenienza,
        $ingredienti = null,
        $weigth = null

    )
    {
        parent::__construct($marca, $prezzo, $provenienza);
        $this->ingredienti = $ingredienti;
        $this->weight = $weigth;

    }


    
}