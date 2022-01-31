<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * Route test.
     *
     * @return void
     */
    public function test_route()
    {
        $response = $this -> post('/getadmitform');
        $response -> assertStatus(200);

        $response = $this->post('/getadmit',[
            'faculty' => 'maths',
            'roll' => '1209',
            'done' => 1,
        ]);
        $response -> assertStatus(200);
    }
}