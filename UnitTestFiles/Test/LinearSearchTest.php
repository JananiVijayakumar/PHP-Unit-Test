<?php

/**
 * Author : Janani VijayaKumar
 * Date : 26-01-2022
 * Desc : Binary Search Php Unit Test
 */

include "main/LinearSearch.php";

use PHPUnit\Framework\TestCase;

class LinearSearchTest extends TestCase
{
    public $linearSearchArray = array(4, 6, 12, 34, 13, 76, 23);

    /**
     * @test for given value
     */
    public function givenValueIsTrueShouldReturnTrue()
    {
        $linearSearch = new LinearSearch();
        $result = $linearSearch->search($this->linearSearchArray, 34);
        $this->assertEquals(3, $result, $message = "Test Sucessfull!!");
        echo $message;
    }
}
