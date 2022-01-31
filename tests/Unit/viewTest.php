<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
class viewTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this -> post('/home');
        $response -> assertViewIs('user');
        $response = $this->post('/search-record',[
            'name' => 'CBA',
            'reg' => '102',
            'hall' => 'Khulna',
        ]);
         $response -> assertViewIs('userDisp');
    }
}
