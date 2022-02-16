<?php

include "./PrimeNumber.php";
include "./ASCIIArray.php";


if (count($argv) <= 1) {
    throw new Exception('A parameter must be inserted! Try run.php help for more options.');
} else {
    for ($i = 1; $i < count($argv); $i++) {
        eval($argv[$i] . "();");
    }
}

function help() {

    $options = [];
    $options[] = "prime_numbers = print numbers from 1 to 100 and identify which are prime numbers.";
    $options[] = "ascii_array = print all characters ASCII from ',' to '|', remove one randomly and identify which is missing.";

    print("Use one of these parameters below to execute the functions:");
    print(PHP_EOL);
    print(PHP_EOL);
    foreach ($options as $opt) {
        print($opt);
        print(PHP_EOL);
    }
}

function prime_numbers() {
    $pn = new PrimeNumbers();
    $pn->run();
}

function ascii_array() {
    $aa = new ASCIIArray();
    $aa->run();
}
