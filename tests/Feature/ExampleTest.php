<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Http\Controllers\ConfirmSubmission;
use App\Models\MathStuApply;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        //$this->withoutExceptionHandling();
        $faculty="Faculty of Mathematical & Physical Sciences";
        $response = $this->post('/done/{$faculty}',[
            'roll' => '1209',
            'done' => 0, 
        ]);
        $response->assertOk();
        $this -> assertCount(1,MathStuApply::all());
    }
}
