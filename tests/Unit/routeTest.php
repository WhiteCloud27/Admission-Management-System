<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class routeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response=$this->get("/Faq");
        $response->assertStatus(200);
        $response=$this->post("/admin");
        $response->assertStatus(405);
        $response=$this->post("/adminseatplan");
        $response->assertStatus(405);
        $response=$this->post("/userseatplan");
        $response->assertStatus(405);
    }
}
