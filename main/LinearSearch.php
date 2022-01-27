<?php

/**
 * Author : Janani VijayaKumar
 * Date : 26-01-2022
 * Desc : Binary Search Php Unit Test
 */
class LinearSearch
{
    public function search($linearSearchArray, $value)
    {
        for ($i = 0; $i < count($linearSearchArray); $i++) {
            if ($linearSearchArray[$i] == $value)
                return $i;
        }
        return false;
    }
}
