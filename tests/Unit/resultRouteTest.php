<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class resultRouteTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response=$this->post("/users");
        $response->assertStatus(500);
        $response=$this->post("/admins");
        $response->assertStatus(500);
        $response=$this->post("/candidate");
        $response->assertStatus(500);
        
    }
}
