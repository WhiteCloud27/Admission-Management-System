<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class formValidation extends TestCase
{
    public function test_formvalidation()
    {
        $response = $this->post('/first',[
            'name' => 'Aurnob',
            'reg' => '105',
            'hall' => 'MMH',
        ]);
        $response -> assertInvalid(['name', 'reg', 'hall']);
​;
        $response = $this->post('/first',[
            'name' => 'CBA',
            'reg' => '102',
            'hall' => 'Khulna',
        ]);
        $response -> assertInvalid(['name', 'reg', 'hall']);

    }
}
