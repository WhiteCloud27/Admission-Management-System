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
        $response = $this -> post('/choosesubject');
        $response -> assertStatus(200);

        $response = $this->post('/done/{faculty}',[
            'roll' => '1209',
            'done' => 0, 
        ]);
        $response -> assertStatus(200);

        $response = $this->post('/choose/submit',[
            'fname' => 'Steve',
            'lname' => 'Joe',
            'roll' => '400',
            'mail' => 'mail@gmail.com',
            'phoneNum' => '01984563241',
            'faculty' => 'Faculty of Arts & Humanities',
        ]);
        $response -> assertStatus(200);
    }
}
