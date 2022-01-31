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
        $response = $this -> post('/choosesubject');
        $response -> assertViewIs('choosesubject');

        $response = $this->post('/done/{faculty}',[
            'roll' => '1209',
            'done' => 0, 
        ]);
         $response -> assertViewIs('success.success');

        $response = $this->post('/choose/submit',[
            'fname' => 'Steve',
            'lname' => 'Joe',
            'roll' => '400',
            'mail' => 'mail@gmail.com',
            'phoneNum' => '01984563241',
            'faculty' => 'Faculty of Arts & Humanities',
        ]);
         $response -> assertViewIs('.subjectlist.subjectlist');
    }
}
