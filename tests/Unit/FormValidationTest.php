<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class FormValidationTest extends TestCase
{
    /**
     * Form validation test
     *
     * @return void
     */
    public function test_formvalidation()
    {
        $response = $this->post('/choose/submit',[
            'fname' => 'Stev',
            'lname' => 'Jo',
            'roll' => '401',
            'mail' => 'mail@gmail.com',
            'phoneNum' => '01984563241',
            'faculty' => 'Faculty of Arts & Humanities',
        ]);
        $response -> assertInvalid(['fname', 'lname', 'roll']);

        $response = $this->post('/choose/submit',[
            'fname' => 'Steve',
            'lname' => 'Joe',
            'roll' => '400',
            'mail' => 'mail@gmail.com',
            'phoneNum' => '01984563241',
            'faculty' => 'Faculty of Mathematical & Physical Sciences',
        ]);
        $response -> assertInvalid(['fname', 'lname', 'roll']);
    }
}
