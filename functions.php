<?php
declare(strict_types=1);
// This is the file where you can keep all your functions.

//Function for sorting post
require __DIR__.'/data.php';

function val_sort(array $array, string $key){

  foreach ($array as $k => $v) {

    $tempArray[] = $v[$key];
  }

  asort($tempArray);

  foreach ($tempArray as $k => $v) {

    $sortedArray[] = $array[$k];
  }

return $sortedArray;

}
