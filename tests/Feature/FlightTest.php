<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FlightTest extends TestCase
{
    /* A basic feature test example.

    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
*/
        /** @test */
    public function a_user_can_view_flights()
    {
        $response = $this->get('/flights');
        $response->assertStatus(200);
    }
}
