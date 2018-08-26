<?php

namespace Tests\Feature;

use App\Hotel;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HotelsTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    public function a_user_can_view_all_hotels()
    {
        $hotel = factory('App\Hotel')->create();
        $response = $this->get('/hotels');

        $response->assertSee($hotel->name);
        //$response->assertStatus(200);
    }
}
