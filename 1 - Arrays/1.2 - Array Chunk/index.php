<?php

    // Passando o terceiro parâmetro como default que é false
    $array_exemplo = ['a', 'b', 'c', 'd', 'e'];

    print_r("<pre>");
    print_r(array_chunk($array_exemplo, 2));
    print_r("</pre>");


    // Passando o terceiro parâmetro como true, ele preserva o valor da chave original do array.
    $array_exemplo = ['a', 'b', 'c', 'd', 'e'];

    print_r("<pre>");
    print_r(array_chunk($array_exemplo, 2, true));
    print_r("</pre>");