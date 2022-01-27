<?php

/**
 * Author : Janani VijayaKumar
 * Date : 26-01-2022
 * Desc : Binary Search Php Unit Test
 */
class BinarySearch
{
    function binarySearch($value, $myArray)
    {
        $start = 0;
        $end = count($myArray) - 1;
        while ($start <= $end) {
            #calculating mid value.
            $midValue = intval(($start + $end) / 2);
            if ($value == $myArray[$midValue]) {
                return $midValue;
            } else if ($value < $myArray[$midValue]) {
                $end = $midValue - 1;
            } else {
                $start = $midValue + 1;
            }
        }
        return -1;
    }
}
