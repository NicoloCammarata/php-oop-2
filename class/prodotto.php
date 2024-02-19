<?php
class prodotto{
    public $marca;
    public $prezzo;
    public $provenienza;

    public function __construct(
        $marca,
        $prezzo,
        $provenienza,

    )
    {
        $this->marca = $marca;
        $this->prezzo = $prezzo;
        $this->provenienza = $provenienza;
    }

}