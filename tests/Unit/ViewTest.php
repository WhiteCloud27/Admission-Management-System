<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;


class ViewTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this -> post('/getadmit',[
            'faculty' => 'maths',
            'roll' => '1209',
        ]);
        $response -> assertViewIs('getadmit.fail');
    }
}
