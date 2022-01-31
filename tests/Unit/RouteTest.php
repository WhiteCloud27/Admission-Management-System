<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * Rote Test.
     *
     * @return void
     */
    public function test_route()
    {
        $response = $this->get('/form');
        $response -> assertStatus(200);

        $response = $this->get('/edit/3');
        $response -> assertStatus(200);


        $response = $this->get('/admitdownload');
        $response -> assertStatus(200);

        $response = $this->get('/admit/1');
        $response -> assertStatus(200);
    }
}
