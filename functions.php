<?php

/*
 * This file is part of Yrgo.
 * (c) Yrgo, högre yrkesutbildning.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
// This is the file where you can keep all your functions.

//Function for sorting posts
require __DIR__.'/data.php';

function val_sort(array $array, string $key){

  foreach ($array as $k => $v) {

    $tempArray[] = $v[$key];
  }

  if ($key === 'date' || $key === 'likes'){ //If we choose to sort by date or likes
    //we want it in the reversed order
    arsort($tempArray);

  } else {  //Everything else we want to sort in alpabetical or acending order

    asort($tempArray);

    if ($key === 'date' || $key === 'likes') { //If we choose to sort by date or likes
        //we want it in the reversed order
        arsort($tempArray);
    } else {  //Everything else we want to sort in alpabetical or acending order

        asort($tempArray);
    }

    foreach ($tempArray as $k => $v) {
        $sortedArray[] = $array[$k];
    }

    return $sortedArray;
}
