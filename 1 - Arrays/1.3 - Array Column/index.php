<?php

    /*
        Monta um array com a chave de coluna passada como parâmetro 2 e ordenada pelo parâmetro 3 que é 
        opcional.
    */

    $array_multidimensional = [
        ['id' => 1,
         'first_name' => 'John',
         'last_name' => 'Doe'],

        ['id' => 2,
         'first_name' => 'Sally',
         'last_name' => 'Smith'],

        ['id' => 3,
         'first_name' => 'Jane',
         'last_name' => 'Jones'],

        ['id' => 4,
         'first_name' => 'Peter',
         'last_name' => 'Doe']        
    ];

    $first_names = array_column($array_multidimensional, 'first_name', 'id');
    print_r($first_names);