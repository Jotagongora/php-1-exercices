<?php

declare(strict_types=1);

function sumArray(array $array): int {

//     foreach ($array as $element) {

//         $sum = 0;

//         $sum += $element;

//         return $sum;

//     }

return array_sum($array);

}


function findMax(array $array): int {

    // $max = $array[0];

    // foreach ($array as $element) {


    //     if ($element > $max) {
            
    //         $max = $element;

    //     }

    // }

    // return $max;

        return max($array);
        
}


function averageAge(array $array): int {

    $sum = 0;

    foreach ($array as $element) {

        $sum += $element['age'];

    }

    return $sum/count($array);

}

function filterAge(array $people, int $age): array {

    $newArray = [];

    foreach ($people as $person) {

        if($person['age'] >= $age) {

            $newArray[] = $person;

        }

    }

    return $newArray;

}