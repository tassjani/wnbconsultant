<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    
    public function testBasicTest()
    {
        $response = $this->get('/about');

        dd($response);

        // $response->assertStatus(200);
    }

    /**
     * @test
     */

    public function about_route_return()
    {
        $response = $this->get('/about');

        dd($response);

        $response->assertStatus(200);
    }
}
