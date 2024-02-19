<?php
require_once __DIR__.'/categoria.php';


class cani extends categoria {
    public $razza;
    public $età;
    public $peso;



    public function __construct(
        $razza = null,
        $età = null,
        $peso = null,

    )
    {
        $this->razza = $razza;
        $this->età = $età;
        $this->peso = $peso;
    }
    
}

?>