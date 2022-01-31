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
        $response = $this->post('/getadmit',[
            'faculty' => 'maths',
            'roll' => '1209',
            'done' => 1,
        ]);
        $response -> assertOk();

    }
}