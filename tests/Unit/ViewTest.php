<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class ViewTest extends TestCase
{
    /**
     *  View Test
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this -> get('/form');
        $response -> assertViewIs('admin.form');

        $response = $this -> get('/edit/3');
        $response -> assertViewIs('admin.editform');

        $response = $this -> get('/admit/3');
        $response -> assertViewIs('admit');

        $response = $this -> get('/admitdownload');
        $response -> assertViewIs('admitdownload');

        
    }
}
