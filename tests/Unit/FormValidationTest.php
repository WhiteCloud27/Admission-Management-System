<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class FormValidationTest extends TestCase
{
    /**
     * Form Validation Test
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('/sendmessage',[
            'name' => 'Mahim',
            'email' => 'mahbubislammahim@gmail.com',
            'phone' => '01982474475',
            'message' => 'Hello',
            
        ]);
        $response -> assertvalid(['name', 'email', 'phone', 'message']);

        $response = $this->post('/sendmessage',[
            'name' => '',
            'email' => 'mahimislam70@gmail.com',
            'phone' => '01877474475',
            'message' => 'Check',
            
        ]);
        $response -> assertvalid(['name', 'email', 'phone', 'message']);

    

    }
}
