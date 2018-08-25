<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HotelsTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function a_user_can_view_all_hotels()
    {
        $response = $this->get('/hotels');

        $response->assertStatus(200);
    }
}
