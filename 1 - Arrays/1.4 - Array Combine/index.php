<?php

    $array_one = ['green', 'red', 'yellow'];
    $array_two = ['árvore', 'luz', 'sol'];

    $array_combinado = array_combine($array_one, $array_two);

    print_r($array_combinado);