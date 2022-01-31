<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * Route Test
     *
     * @return void
     */
    public function test_route()
    {
        $response = $this->get('/contactus');
        $response -> assertStatus(200);

        $response = $this->post('/sendmessage');
        $response -> assertStatus(302);
    }
}
