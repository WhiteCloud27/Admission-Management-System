<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     * View Test
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this -> get('/contactus');
        $response -> assertViewIs('contactus');

        $response = $this->post('/sendmessage',[
            'name' => 'Mahim',
            'email' => 'mahububislammahim@gmail.com',
            'phone' => '01982474475',
            'message' => 'Hello',
        ]);
         $response -> assertStatus(302);
    }
}
