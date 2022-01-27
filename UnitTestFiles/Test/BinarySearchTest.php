<?php

/**
 * Author : Janani VijayaKumar
 * Date : 26-01-2022
 * Desc : Binary Search Php Unit Test
 */
include "main/BinarySearch.php";

use PHPUnit\Framework\TestCase;

class BinarySearchTest extends TestCase
{
    public $array = array(4, 6, 12, 34, 13, 76, 23);

    /**
     * @test for given value
     */

    public function givenValueIsTrueShouldReturnTrue()
    {
        $binary = new BinarySearch();
        $result = $binary->binarySearch(6, $this->array);
        $this->assertEquals($result, 1, $message = "Test Sucessfull!!");
        echo $message;
    }
    /**
     * @test for not given value
     */

    public function givenValueIsFalseShouldReturnTrue()
    {
        $binary = new BinarySearch();
        $result = $binary->binarySearch(3, $this->array);
        $this->assertEquals($result, -1, $message = "Test Sucessfull!!");
        echo $message;
    }
}
