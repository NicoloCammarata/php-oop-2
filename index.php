<?php
require_once __DIR__.'/class/cibo.php';
require_once __DIR__.'/class/prodotto.php';





try {
    $prodottOne = new cibo(
        'Purina',
        '3$/kg',
        'Portogruaro',
        'dog',
        

        
    );
    
}
catch (Exception $e) {

    echo '<h4 style="color: red;">Valore quantità prodotto generico non valido!</h4>';
}

try {
    $toyOne = new cibo(
        'Gioc',
        '15$',
        'Portogruaro',
        'dog',
        

        
    );
    
}
catch (Exception $e) {

    echo '<h4 style="color: red;">Valore quantità prodotto generico non valido!</h4>';
}



