<?php

require_once __DIR__.'/prodotto.php';

class cibo extends prodotto {
    public $ingredienti;
    

    public function __construct(
        $marca,
        $prezzo,
        $provenienza,
        $ingredienti = null

    )
    {
        parent::__construct($marca, $prezzo, $provenienza);
        $this->ingredienti = $ingredienti;
    }


    
}